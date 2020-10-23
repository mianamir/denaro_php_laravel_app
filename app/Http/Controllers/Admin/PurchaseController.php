<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePurchaseRequest;
use App\Http\Requests\Admin\UpdatePurchaseRequest;
use App\Models\Admin\Expense;
use App\Models\Admin\Product;
use App\Models\Admin\Purchase;
use App\Models\Admin\Suppier;
use App\Repositories\Admin\PurchaseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PurchaseController extends AppBaseController
{
    /** @var  PurchaseRepository */
    private $purchaseRepository;

    public function __construct(PurchaseRepository $purchaseRepo)
    {
        $this->purchaseRepository = $purchaseRepo;
    }


    // Purchase Reports
    public function search(Request $request)
    {
        $from = $request->get('from');
        $to = $request->get('to');
        $purchases = null;
        if(!empty($from) || !empty($to)){
            $purchases = Purchase::
            whereBetween('created_at', [$from, $to])->get();
            return view('admin.purchases.search',compact('purchases'));
        }
        $purchases = Purchase::all();
        return view('admin.purchases.search',compact('purchases'));


    }

    /**
     * Display a listing of the Purchase.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->purchaseRepository->pushCriteria(new RequestCriteria($request));
        $purchases = $this->purchaseRepository->all();

        return view('admin.purchases.index')
            ->with('purchases', $purchases);
    }

    /**
     * Show the form for creating a new Purchase.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.purchases.create');
    }

    /**
     * Store a newly created Purchase in storage.
     *
     * @param CreatePurchaseRequest $request
     *
     * @return Response
     */
    public function store(CreatePurchaseRequest $request)
    {

        $supplier_id = $request->get('supplier_id');
        $product_id = $request->get('product_id');
        $purchase_date = $request->get('purchase_date');
        $purchase_price = $request->get('purchase_price');

        if ($supplier_id == -1) {
            $request->session()->flash('supplier_id', 'Supplier is required');
            return redirect()->back()->withInput();
        }
        if ($product_id == -1) {
            $request->session()->flash('product_id', 'Product is required');
            return redirect()->back()->withInput();
        }
        if ($purchase_date== null) {
            $request->session()->flash('purchase_date', 'Purchase date is required');
            return redirect()->back()->withInput();
        }
        if ($purchase_price == null) {
            $request->session()->flash('purchase_price', 'Purchase price is required');
            return redirect()->back()->withInput();
        }


        $purchase = new Purchase();

        try{
            $purchases = Purchase::all();
            $purchaseNo = $purchases->last();
            $purchase->purchase_no = intval($purchaseNo->id) +1;

        }catch (\Exception $e){
            $purchase->purchase_no = 1;
        }
        $purchase->purchase_date = $purchase_date;
        $purchase->status = "Pending";
        $purchase->supplier_id = $supplier_id;
        $purchase->product_id = $product_id;
        // update product price
        $product = Product::find($product_id);
        if($product != null){
            $product->price = $purchase_price;
            $product->update();
        }else{
            $product->price = 0;
            $product->update();
        }

        // update supplier price
        $supplier = Suppier::find($supplier_id);
        if($supplier != null){
            $supplier->total_amount += $purchase_price;
            $supplier->update();
        }

        $purchase->total_amount = $purchase_price;
        $purchase->save();

        Flash::success('Purchase saved successfully.');

        return redirect(route('admin.purchases.index'));
    }

    /**
     * Display the specified Purchase.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $purchase = Purchase::find($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('admin.purchases.index'));
        }

        $product = Product::where('id', $purchase->product_id)->first();
        $supplier = Suppier::where('id', $purchase->supplier_id)->first();

        $expenses = Expense::where('product_id', $purchase->product_id)->get();
        $expensesCount = Expense::where('product_id', $purchase->product_id)->get()->count();

        return view('admin.purchases.show',compact('purchase','product','expenses','supplier','expensesCount'));
    }

    /**
     * Show the form for editing the specified Purchase.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $purchase = $this->purchaseRepository->findWithoutFail($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('admin.purchases.index'));
        }

        return view('admin.purchases.edit')->with('purchase', $purchase);
    }

    /**
     * Update the specified Purchase in storage.
     *
     * @param  int              $id
     * @param UpdatePurchaseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePurchaseRequest $request)
    {
        $purchase = $this->purchaseRepository->findWithoutFail($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('admin.purchases.index'));
        }

        $supplier_id = $request->get('supplier_id');
        $product_id = $request->get('product_id');
        $purchase_date = $request->get('purchase_date');
        $purchase_price = $request->get('purchase_price');
        $status = $request->get('status');

        if ($supplier_id == -1) {
            $request->session()->flash('supplier_id', 'Supplier is required');
            return redirect()->back()->withInput();
        }
        if ($product_id == -1) {
            $request->session()->flash('product_id', 'Product is required');
            return redirect()->back()->withInput();
        }
        if ($purchase_date== null) {
            $request->session()->flash('purchase_date', 'Purchase date is required');
            return redirect()->back()->withInput();
        }
        if ($purchase_price == null) {
            $request->session()->flash('purchase_price', 'Purchase price is required');
            return redirect()->back()->withInput();
        }

        $purchase->purchase_date = $purchase_date;
        $purchase->status = $status;
        $purchase->supplier_id = $supplier_id;
        $purchase->product_id = $product_id;
        // update product price
        $product = Product::find($product_id);
        if($product != null){
            $product->price = $purchase_price;
            $product->update();
        }else{
            $product->price = 0;
            $product->update();
        }

        // update supplier price
        $supplier = Suppier::find($supplier_id);
        if($supplier != null){
            $supplier->total_amount += $purchase_price;
            $supplier->update();
        }

        $purchase->total_amount = $purchase_price;
        $purchase->update();

        Flash::success('Purchase updated successfully.');

        return redirect(route('admin.purchases.index'));
    }

    /**
     * Remove the specified Purchase from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $purchase = $this->purchaseRepository->findWithoutFail($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('admin.purchases.index'));
        }

        $purchase->status = "Deleted";
        $purchase->save();

        Flash::success('Purchase deleted successfully.');

        return redirect(route('admin.purchases.index'));
    }
}
