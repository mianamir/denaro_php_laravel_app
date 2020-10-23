<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateSaleRequest;
use App\Http\Requests\Admin\UpdateSaleRequest;
use App\Models\Admin\Customer;
use App\Models\Admin\Expense;
use App\Models\Admin\Product;
use App\Models\Admin\Sale;
use App\Repositories\Admin\SaleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SaleController extends AppBaseController
{
    /** @var  SaleRepository */
    private $saleRepository;

    public function __construct(SaleRepository $saleRepo)
    {
        $this->saleRepository = $saleRepo;
    }

    // Sale Reports
    public function search(Request $request)
    {
        $from = $request->get('from');
        $to = $request->get('to');
        $sales = null;
        if(!empty($from) || !empty($to)){
            $sales = Sale::
            whereBetween('created_at', [$from, $to])->get();

            return view('admin.sales.search',compact('sales','totalPrice'));
        }
        $sales = Sale::all();
        return view('admin.sales.search',compact('sales'));


    }

    /**
     * Display a listing of the Sale.
     *
     * @param Request $request
     * @return Response
     */
    public function index()
    {
        $sales = Sale::all();
        $completedSales = Sale::where('status','Completed')->get();
        $pendingSales = Sale::where('status','Pending')->get();
        $completedSalesTotalAmount = 0;
        $pendingSalesTotalAmount = 0;
        $salesTotalAmount = 0;
        $salesTotalRemainingAmount = 0;
        foreach ($completedSales as $sale){
            $completedSalesTotalAmount += $sale->total_amount;
        }
        foreach ($pendingSales as $sale){
            $pendingSalesTotalAmount += $sale->total_amount;
        }

        foreach ($sales as $sale){
            $salesTotalAmount += $sale->total_amount;
            $salesTotalRemainingAmount += $sale->remaining_amount;
        }


        return view('admin.sales.index',
            compact('sales',
                'completedSalesTotalAmount',
                'pendingSalesTotalAmount',
                'salesTotalAmount',
                'salesTotalRemainingAmount'));
    }

    /**
     * Show the form for creating a new Sale.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.sales.create');
    }

    /**
     * Store a newly created Sale in storage.
     *
     * @param CreateSaleRequest $request
     *
     * @return Response
     */
    public function store(CreateSaleRequest $request)
    {
        $customer_id = $request->get('customer_id');
        $product_id = $request->get('product_id');
        $sale_date = $request->get('sale_date');
        $sale_price = $request->get('sale_price');
        $no_of_items = $request->get('no_of_items');
        $discount = $request->get('discount');
        $totalAmountTemp = $request->get("totalSaleAmount");
        $totalAmountTemp = doubleval($totalAmountTemp);

        if ($customer_id == -1) {
            $request->session()->flash('customer_id', 'Customer is required');
            return redirect()->back()->withInput();
        }
        if ($product_id == -1) {
            $request->session()->flash('product_id', 'Product is required');
            return redirect()->back()->withInput();
        }
        if ($sale_date== null) {
            $request->session()->flash('sale_date', 'Sale date is required');
            return redirect()->back()->withInput();
        }
        if ($sale_price == null) {
            $request->session()->flash('sale_price', 'Sale price is required');
            return redirect()->back()->withInput();
        }


        $sale = new Sale();

        try{
            $sales = Sale::all();
            $saleNo = $sales->last();
            $sale->sale_no = intval($saleNo->id) +1;

        }catch (\Exception $e){
            $sale->sale_no = 1;
        }

        $sale->sale_date = $sale_date;
        $sale->customer_id = $customer_id;
        $sale->product_id = $product_id;
        $sale->no_of_items = $no_of_items;
        $sale->sale_price = $sale_price;
        $sale->discount = $discount;

        $totalAmountTempOrg = $totalAmountTemp;

        $totalAmountTemp = 0;
        $totalAmountWithDiscount = 0;
        $totalAmount = 0;
        $remainingAmount = 0;
        if($no_of_items != 0){
            $totalAmountTemp = $no_of_items * $sale_price;
        }else {
            $totalAmountTemp = $sale_price;
        }
        if($discount != 0){
            $totalAmountWithDiscount = ($totalAmountTemp / 100) * $discount;
            $totalAmount = $totalAmountTemp - $totalAmountWithDiscount;
        }else {
            $totalAmount = $totalAmountTemp;
        }

        if($totalAmount == $totalAmountTempOrg){
            $sale->status = "Completed";
            $sale->total_amount = $totalAmountTempOrg;
            $sale->remaining_amount = 0;

            // update customer price
            $customer = Customer::find($customer_id);
            if($customer != null){
                $customer->total_amount += $totalAmountTempOrg;
                $customer->update();
            }

        }else{

            $sale->status = "Pending";
            $sale->total_amount = $totalAmountTempOrg;
            $sale->remaining_amount = $totalAmount - $totalAmountTempOrg ;


            // update customer price
            $customer = Customer::find($customer_id);
            if($customer != null){
                $customer->total_amount += $totalAmountTempOrg;
                $customer->update();
            }
        }

        $sale->save();

        Flash::success('Sale saved successfully.');

        return redirect(route('admin.sales.index'));
    }

    /**
     * Display the specified Sale.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sale = Sale::find($id);

        if (empty($sale)) {
            Flash::error('Sale not found');

            return redirect(route('admin.sales.index'));
        }

        $product = Product::where('id', $sale->product_id)->first();
        $expenses = Expense::where('id', $sale->product_id)->get();
        $totalExpense = 0;
        foreach ($expenses as $expense){
            $totalExpense += $expense->amount;
        }
        $customer = Customer::where('id', $sale->customer_id)->first();


        return view('admin.sales.show',compact('sale','product','customer','totalExpense'));
    }

    /**
     * Show the form for editing the specified Sale.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sale = $this->saleRepository->findWithoutFail($id);

        if (empty($sale)) {
            Flash::error('Sale not found');

            return redirect(route('admin.sales.index'));
        }

        return view('admin.sales.edit')->with('sale', $sale);
    }

    /**
     * Update the specified Sale in storage.
     *
     * @param  int              $id
     * @param UpdateSaleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSaleRequest $request)
    {
        $sale = $this->saleRepository->findWithoutFail($id);

        if (empty($sale)) {
            Flash::error('Sale not found');

            return redirect(route('admin.sales.index'));
        }

        $customer_id = $request->get('customer_id');
        $product_id = $request->get('product_id');
        $sale_date = $request->get('sale_date');
        $sale_price = $request->get('sale_price');
        $no_of_items = $request->get('no_of_items');
        $discount = $request->get('discount');
        $totalAmountTemp = $request->get("totalSaleAmount");
        $totalAmountTemp = doubleval($totalAmountTemp);

        if ($customer_id == -1) {
            $request->session()->flash('customer_id', 'Customer is required');
            return redirect()->back()->withInput();
        }
        if ($product_id == -1) {
            $request->session()->flash('product_id', 'Product is required');
            return redirect()->back()->withInput();
        }
        if ($sale_date== null) {
            $request->session()->flash('sale_date', 'Sale date is required');
            return redirect()->back()->withInput();
        }
        if ($sale_price == null) {
            $request->session()->flash('sale_price', 'Sale price is required');
            return redirect()->back()->withInput();
        }

        try{
            $sales = Sale::all();
            $saleNo = $sales->last();
            $sale->sale_no = intval($saleNo->id) +1;

        }catch (\Exception $e){
            $sale->sale_no = 1;
        }

        $sale->sale_date = $sale_date;
        $sale->customer_id = $customer_id;
        $sale->product_id = $product_id;
        $sale->no_of_items = $no_of_items;
        $sale->sale_price = $sale_price;
        $sale->discount = $discount;

        $totalAmountTempOrg = $totalAmountTemp;

        $totalAmountTemp = 0;
        $totalAmountWithDiscount = 0;
        $totalAmount = 0;
        $remainingAmount = 0;
        if($no_of_items != 0){
            $totalAmountTemp = $no_of_items * $sale_price;
        }else {
            $totalAmountTemp = $sale_price;
        }
        if($discount != 0){
            $totalAmountWithDiscount = ($totalAmountTemp / 100) * $discount;
            $totalAmount = $totalAmountTemp - $totalAmountWithDiscount;
        }else {
            $totalAmount = $totalAmountTemp;
        }

        if($totalAmount == $totalAmountTempOrg){
            $sale->status = "Completed";
            $sale->total_amount = $totalAmountTempOrg;
            $sale->remaining_amount = 0;

            // update customer price
            $customer = Customer::find($customer_id);
            if($customer != null){
                $customer->total_amount += $totalAmountTempOrg;
                $customer->update();
            }

        }else{

            $sale->status = "Pending";
            $sale->total_amount = $totalAmountTempOrg;
            $sale->remaining_amount = $totalAmount - $totalAmountTempOrg ;

            // update customer price
            $customer = Customer::find($customer_id);
            if($customer != null){
                $customer->total_amount += $totalAmountTempOrg;
                $customer->update();
            }

        }

        $sale->update();

        Flash::success('Sale updated successfully.');


        return redirect(route('admin.sales.index'));
    }

    /**
     * Remove the specified Sale from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sale = $this->saleRepository->findWithoutFail($id);

        if (empty($sale)) {
            Flash::error('Sale not found');

            return redirect(route('admin.sales.index'));
        }

        $sale->status = "Deleted";
        $sale->save();

        Flash::success('Sale deleted successfully.');

        return redirect(route('admin.sales.index'));
    }
}
