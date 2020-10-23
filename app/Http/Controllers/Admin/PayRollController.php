<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePayRollRequest;
use App\Http\Requests\Admin\UpdatePayRollRequest;
use App\Models\Admin\Employee;
use App\Models\Admin\PayRoll;
use App\Repositories\Admin\PayRollRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PayRollController extends AppBaseController
{
    /** @var  PayRollRepository */
    private $payRollRepository;

    public function __construct(PayRollRepository $payRollRepo)
    {
        $this->payRollRepository = $payRollRepo;
    }

    // Pay Roll Reports
    public function search(Request $request)
    {
        $from = $request->get('from');
        $to = $request->get('to');
        $payRolls = null;
        if(!empty($from) || !empty($to)){
            $payRolls = PayRoll::
            whereBetween('created_at', [$from, $to])->get();

            return view('admin.pay_rolls.search',compact('payRolls'));
        }
        $payRolls = PayRoll::all();
        return view('admin.pay_rolls.search',compact('payRolls'));


    }
    /**
     * Display a listing of the PayRoll.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->payRollRepository->pushCriteria(new RequestCriteria($request));
        $payRolls = $this->payRollRepository->all();

        return view('admin.pay_rolls.index')
            ->with('payRolls', $payRolls);
    }

    /**
     * Show the form for creating a new PayRoll.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pay_rolls.create');
    }

    /**
     * Store a newly created PayRoll in storage.
     *
     * @param CreatePayRollRequest $request
     *
     * @return Response
     */
    public function store(CreatePayRollRequest $request)
    {
        $employee_id = $request->get('employee_id');
        $salary = $request->get('salary');

        if ($employee_id == -1) {
            $request->session()->flash('supplier_id', 'Supplier is required');
            return redirect()->back()->withInput();
        }

        if ($salary == null) {
            $request->session()->flash('salary', 'Salary is required');
            return redirect()->back()->withInput();
        }

        if($employee_id != null && $salary != null){

            $payRoll = new PayRoll();

            $payRoll->employee_id = $employee_id;
            $payRoll->salary = $salary;

            $employee = Employee::find($employee_id);
            if($employee != null){
                if($employee->salary == $salary){
                    $payRoll->status = "Paid";
                }else{
                    $payRoll->status = "UnPaid";
                }
            }
            $payRoll->save();
            Flash::success('Pay Roll saved successfully.');

        }else{
            Flash::success('Pay Roll not saved.');
        }

        return redirect(route('admin.payRolls.index'));
    }

    /**
     * Display the specified PayRoll.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $payRoll = $this->payRollRepository->findWithoutFail($id);

        if (empty($payRoll)) {
            Flash::error('Pay Roll not found');

            return redirect(route('admin.payRolls.index'));
        }

        return view('admin.pay_rolls.show')->with('payRoll', $payRoll);
    }

    /**
     * Show the form for editing the specified PayRoll.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $payRoll = $this->payRollRepository->findWithoutFail($id);

        if (empty($payRoll)) {
            Flash::error('Pay Roll not found');

            return redirect(route('admin.payRolls.index'));
        }

        return view('admin.pay_rolls.edit')->with('payRoll', $payRoll);
    }

    /**
     * Update the specified PayRoll in storage.
     *
     * @param  int              $id
     * @param UpdatePayRollRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePayRollRequest $request)
    {
        $payRoll = $this->payRollRepository->findWithoutFail($id);

        if (empty($payRoll)) {
            Flash::error('Pay Roll not found');

            return redirect(route('admin.payRolls.index'));
        }

        $employee_id = $request->get('employee_id');
        $salary = $request->get('salary');
        $status = $request->get('status');

        if ($employee_id == -1) {
            $request->session()->flash('supplier_id', 'Supplier is required');
            return redirect()->back()->withInput();
        }

        if ($salary == null) {
            $request->session()->flash('salary', 'Salary is required');
            return redirect()->back()->withInput();
        }

        if ($status== -1) {
            $request->session()->flash('status', 'Status is required');
            return redirect()->back()->withInput();
        }

        if($employee_id != null && $salary != null){

            $payRoll->employee_id = $employee_id;
            $payRoll->salary = $salary;
            $employee = Employee::find($employee_id);
            if($employee != null){
                if($employee->salary == $salary){
                    $payRoll->status = "Paid";
                }else{
                    $payRoll->status = "UnPaid";
                }
            }
            $payRoll->update();
            Flash::success('Pay Roll saved successfully.');

        }else{
            Flash::success('Pay Roll not saved.');
        }

        Flash::success('Pay Roll updated successfully.');

        return redirect(route('admin.payRolls.index'));
    }

    /**
     * Remove the specified PayRoll from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $payRoll = $this->payRollRepository->findWithoutFail($id);

        if (empty($payRoll)) {
            Flash::error('Pay Roll not found');

            return redirect(route('admin.payRolls.index'));
        }

        $payRoll->status = "Deleted";
        $payRoll->update();

        Flash::success('Pay Roll deleted successfully.');

        return redirect(route('admin.payRolls.index'));
    }
}
