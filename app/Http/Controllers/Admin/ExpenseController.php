<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateExpenseRequest;
use App\Http\Requests\Admin\UpdateExpenseRequest;
use App\Models\Admin\Expense;
use App\Models\Admin\Purchase;
use App\Models\Admin\Product;
use App\Repositories\Admin\ExpenseRepository;
use App\Http\Controllers\AppBaseController;
use DaveJamesMiller\Breadcrumbs\Exception;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ExpenseController extends AppBaseController
{
    /** @var  ExpenseRepository */
    private $expenseRepository;

    public function __construct(ExpenseRepository $expenseRepo)
    {
        $this->expenseRepository = $expenseRepo;
    }
// Expense Reports
    public function search(Request $request)
    {
        $from = $request->get('from');
        $to = $request->get('to');
        $expenses = null;
        if(!empty($from) || !empty($to)){
            $expenses = Expense::
            whereBetween('created_at', [$from, $to])->get();

            return view('admin.expenses.search',compact('expenses'));
        }
        $expenses = Expense::all();
        return view('admin.expenses.search',compact('expenses'));


    }
    /**
     * Display a listing of the Expense.
     *
     * @param Request $request
     * @return Response
     */
    public function index()
    {
        $expenses = Expense::all();
        $productExpenses = Expense::where('type','Product')->get();
        $totalProductExpenses = 0;
        foreach ($productExpenses as $productExpense){
            $totalProductExpenses += $productExpense->amount;
        }
        $supplierExpenses = Expense::where('type','Supplier')->get();
        $totalsupplierExpenses = 0;
        foreach ($supplierExpenses as $supplierExpense){
            $totalsupplierExpenses += $supplierExpense->amount;
        }
        $employeeExpenses = Expense::where('type','Employee')->get();
        $totalemployeeExpenses = 0;
        foreach ($employeeExpenses as $employeeExpense){
            $totalemployeeExpenses += $employeeExpense->amount;
        }
        $otherExpenses = Expense::where('type','Other')->get();
        $totalotherExpenses = 0;
        foreach ($otherExpenses as $otherExpense){
            $totalotherExpenses += $otherExpense->amount;
        }

        $totalExpenses = 0;
        foreach ($expenses as $expense){
            $totalExpenses += $expense->amount;
        }

        return view('admin.expenses.index',compact('expenses','totalProductExpenses','totalsupplierExpenses',
            'totalemployeeExpenses','totalotherExpenses','totalExpenses'));
    }

    /**
     * Show the form for creating a new Expense.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.expenses.create');
    }

    /**
     * Store a newly created Expense in storage.
     *
     * @param CreateExpenseRequest $request
     *
     * @return Response
     */
    public function store(CreateExpenseRequest $request)
    {
        $supplier_id = $request->get('supplier_id');
        $product_id = $request->get('product_id');
        $employee_id = $request->get('employee_id');
        $amount = $request->get('amount');
        $type = $request->get('type');
        $name = $request->get('name');
        $details = $request->get('details');
        if ($type== -1) {
            $request->session()->flash('type', 'Type is required');
            return redirect()->back()->withInput();
        }
        if ($amount == null) {
            $request->session()->flash('amount', 'Amount is required');
            return redirect()->back()->withInput();
        }

        $expense = new Expense();

        if($product_id == -1){
            $expense->product_id = 0;
        }else{
            $expense->product_id = $product_id;
        }
        if($supplier_id == -1){
            $expense->supplier_id = 0;
        }else{
            $expense->supplier_id = $supplier_id;
        }
        if($employee_id == -1){
            $expense->employee_id = 0;
        }else{
            $expense->employee_id = $employee_id;
        }
        $expense->status = "Completed";
        $expense->amount = $amount;
        $expense->type = $type;
        $expense->name = $name;
        $expense->details = $details;

        try{
            // update product & purchase price
            if (isset($product_id)){
                $product = Product::find($product_id);
                $purchase = Purchase::where('product_id',$product->id)->first();
                if($product != null && $purchase != null){
                    $product->price += $amount;
                    $product->update();

                    $purchase->total_amount += $amount;
                    $purchase->update();

                }else{
                    $product->price += 0;
                    $product->update();

                    // $purchase->total_amount += 0;
                    $purchase->update();
                }

            } // ends if
        }catch (Exception $e){
            
        }


        $expense->save();

        Flash::success('Expense saved successfully.');

        return redirect(route('admin.expenses.index'));
    }

    /**
     * Display the specified Expense.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $expense = $this->expenseRepository->findWithoutFail($id);

        if (empty($expense)) {
            Flash::error('Expense not found');

            return redirect(route('admin.expenses.index'));
        }

        return view('admin.expenses.show')->with('expense', $expense);
    }

    /**
     * Show the form for editing the specified Expense.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $expense = $this->expenseRepository->findWithoutFail($id);

        if (empty($expense)) {
            Flash::error('Expense not found');

            return redirect(route('admin.expenses.index'));
        }

        return view('admin.expenses.edit')->with('expense', $expense);
    }

    /**
     * Update the specified Expense in storage.
     *
     * @param  int              $id
     * @param UpdateExpenseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExpenseRequest $request)
    {
        $expense = $this->expenseRepository->findWithoutFail($id);

        if (empty($expense)) {
            Flash::error('Expense not found');

            return redirect(route('admin.expenses.index'));
        }

        $supplier_id = $request->get('supplier_id');
        $product_id = $request->get('product_id');
        $employee_id = $request->get('employee_id');
        $amount = $request->get('amount');
        $type = $request->get('type');
        $name = $request->get('name');
        $details = $request->get('details');
        $status = $request->get('status');


        if ($type== -1) {
            $request->session()->flash('type', 'Type is required');
            return redirect()->back()->withInput();
        }
        if ($amount == null) {
            $request->session()->flash('amount', 'Amount is required');
            return redirect()->back()->withInput();
        }

        // update product & purchase price
        $product = Product::find($product_id);
        $purchase = Purchase::where('product_id',$product->id)->first();
        if($product != null && $purchase != null){

            $product->price -= $expense->amount;

            $product->price += $amount;
            $product->update();

            $product->total_amount -= $expense->amount;

            $purchase->total_amount += $amount;
            $purchase->update();

        }else{
            $product->price += 0;
            $product->update();

            $purchase->total_amount += 0;
            $purchase->update();
        }

        if($product_id == -1){
            $expense->product_id = 0;
        }else{
            $expense->product_id = $product_id;
        }
        if($supplier_id == -1){
            $expense->supplier_id = 0;
        }else{
            $expense->supplier_id = $supplier_id;
        }
        if($employee_id == -1){
            $expense->employee_id = 0;
        }else{
            $expense->employee_id = $employee_id;
        }
        $expense->status = $status;
        $expense->amount = $amount;
        $expense->type = $type;
        $expense->name = $name;
        $expense->details = $details;
        $expense->save();

        Flash::success('Expense updated successfully.');

        return redirect(route('admin.expenses.index'));
    }

    /**
     * Remove the specified Expense from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $expense = $this->expenseRepository->findWithoutFail($id);

        if (empty($expense)) {
            Flash::error('Expense not found');

            return redirect(route('admin.expenses.index'));
        }

        $expense->status = "Deleted";
        $expense->update();

        Flash::success('Expense deleted successfully.');

        return redirect(route('admin.expenses.index'));
    }
}
