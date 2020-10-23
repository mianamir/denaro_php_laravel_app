<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateEmployeeRequest;
use App\Http\Requests\Admin\UpdateEmployeeRequest;
use App\Models\Admin\Employee;
use App\Repositories\Admin\EmployeeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EmployeeController extends AppBaseController
{
    /** @var  EmployeeRepository */
    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepo)
    {
        $this->employeeRepository = $employeeRepo;
    }

    // Employee Reports
    public function search(Request $request)
    {
        $from = $request->get('from');
        $to = $request->get('to');
        $employees = null;
        if(!empty($from) || !empty($to)){
            $employees = Employee::
            whereBetween('created_at', [$from, $to])->get();

            return view('admin.employees.search',compact('employees'));
        }
        $employees = Employee::all();
        return view('admin.employees.search',compact('employees'));


    }

    /**
     * Display a listing of the Employee.
     *
     * @param Request $request
     * @return Response
     */
    public function index()
    {
        $employees = Employee::where('status','Active')->get();
//        $totalNotActiveEmployees = Employee::where('status','NotActive')->get()->count();
        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new Employee.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.employees.create');
    }

    /**
     * Store a newly created Employee in storage.
     *
     * @param CreateEmployeeRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeRequest $request)
    {
        $input = $request->all();

        $student = $this->employeeRepository->create($input);
        $student->status = "Active";
        $student->save();

//        $name = $request->get('name');
//        $email = $request->get('email');
//        $phone = $request->get('phone');
//        $cnic = $request->get('cnic');
//        $type = $request->get('type');
//        $salary = $request->get('salary');
//        $address = $request->get('address');
//        $city = $request->get('city');
//        $country = $request->get('country');
//        $status = $request->get('status');
//        $image = $request->file('image');
//
//        if ($name== null) {
//            $request->session()->flash('name', 'Name is required');
//            return redirect()->back()->withInput();
//        }
//        if ($email == null) {
//            $request->session()->flash('email', 'Email is required');
//            return redirect()->back()->withInput();
//        }
//        if ($phone == null) {
//            $request->session()->flash('phone', 'Phone is required');
//            return redirect()->back()->withInput();
//        }
//        if ($cnic == null) {
//            $request->session()->flash('cnic', 'Cnic is required');
//            return redirect()->back()->withInput();
//        }
//        if ($address == null) {
//            $request->session()->flash('address', 'Address is required');
//            return redirect()->back()->withInput();
//        }
//        if ($city == null) {
//            $request->session()->flash('city', 'City is required');
//            return redirect()->back()->withInput();
//        }
//        if ($country == null) {
//            $request->session()->flash('country', 'Country is required');
//            return redirect()->back()->withInput();
//        }
//        if ($salary == null) {
//            $request->session()->flash('salary', 'Salary is required');
//            return redirect()->back()->withInput();
//        }
//        if ($status == -1) {
//            $request->session()->flash('status', 'Status is required');
//            return redirect()->back()->withInput();
//        }
//        if ($type == -1) {
//            $request->session()->flash('type', 'Type is required');
//            return redirect()->back()->withInput();
//        }
//
//
//        if ($name != null && $email != null && $phone != null
//            && $cnic != null && $salary != null
//            && $address != null && $city != null && $country != null && $image) {
//
//            $employee = new Employee();
//            $employee->name = $name;
//            $employee->email = $email;
//            $employee->cnic = $cnic;
//            $employee->type = $type;
//            $employee->salary = $salary;
//            $employee->phone = $phone;
//            $employee->address = $address;
//            $employee->city = $city;
//            $employee->country = $country;
//            $employee->status = "Active";
//
//            $data = \Imageupload::upload($request->file('image'));
//            $employee->image = $data['original_filedir'];
//
//            $employee->save();
//            Flash::success('Employee saved successfully.');
//
//        }else{
//            Flash::success('Employee is not saved.');
//        }
       Flash::success('Student saved successfully.');

        return redirect(route('admin.employees.index'));
    }

    /**
     * Display the specified Employee.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employee = $this->employeeRepository->findWithoutFail($id);

        if (empty($employee)) {
            Flash::error('Student not found');

            return redirect(route('admin.employees.index'));
        }

        return view('admin.employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified Employee.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employee = $this->employeeRepository->findWithoutFail($id);

        if (empty($employee)) {
            Flash::error('Student not found');

            return redirect(route('admin.employees.index'));
        }

        return view('admin.employees.edit')->with('employee', $employee);
    }

    /**
     * Update the specified Employee in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeRequest $request)
    {
        $employee = $this->employeeRepository->findWithoutFail($id);

        if (empty($employee)) {
            Flash::error('Student not found');

            return redirect(route('admin.employees.index'));
        }

        $employee1 = $this->employeeRepository->update($request->all(), $id);

//        $name = $request->get('name');
//        $email = $request->get('email');
//        $phone = $request->get('phone');
//        $cnic = $request->get('cnic');
//        $type = $request->get('type');
//        $salary = $request->get('salary');
//        $address = $request->get('address');
//        $city = $request->get('city');
//        $country = $request->get('country');
//        $status = $request->get('status');
//
//        if ($name== null) {
//            $request->session()->flash('name', 'Name is required');
//            return redirect()->back()->withInput();
//        }
//        if ($email == null) {
//            $request->session()->flash('email', 'Email is required');
//            return redirect()->back()->withInput();
//        }
//        if ($phone == null) {
//            $request->session()->flash('phone', 'Phone is required');
//            return redirect()->back()->withInput();
//        }
//        if ($cnic == null) {
//            $request->session()->flash('cnic', 'Cnic is required');
//            return redirect()->back()->withInput();
//        }
//        if ($address == null) {
//            $request->session()->flash('address', 'Address is required');
//            return redirect()->back()->withInput();
//        }
//        if ($city == null) {
//            $request->session()->flash('city', 'City is required');
//            return redirect()->back()->withInput();
//        }
//        if ($country == null) {
//            $request->session()->flash('country', 'Country is required');
//            return redirect()->back()->withInput();
//        }
//        if ($salary == null) {
//            $request->session()->flash('salary', 'Salary is required');
//            return redirect()->back()->withInput();
//        }
//        if ($status == -1) {
//            $request->session()->flash('status', 'Status is required');
//            return redirect()->back()->withInput();
//        }
//        if ($type == -1) {
//            $request->session()->flash('type', 'Type is required');
//            return redirect()->back()->withInput();
//        }
//
//
//        if ($name != null && $email != null && $phone != null
//            && $cnic != null && $type != null && $salary != null
//            && $address != null && $city != null && $country != null) {
//
//            $employee->name = $name;
//            $employee->email = $email;
//            $employee->cnic = $cnic;
//            $employee->type = $type;
//            $employee->salary = $salary;
//            $employee->phone = $phone;
//            $employee->address = $address;
//            $employee->city = $city;
//            $employee->country = $country;
//            $employee->status = $status;
//            // check null file
//            if($request->file('image') == null){
//                $employee->image = $employee->image;
//            }else{
//
//                $data = \Imageupload::upload($request->file('image'));
//                $employee->image = $data['original_filedir'];
//            }
//            $employee->update();
//            Flash::success('Employee updated successfully.');
//
//        }else{
//            Flash::success('Employee is not saved.');
//        }
        Flash::success('Employee updated successfully.');

        return redirect(route('admin.employees.index'));
    }

    /**
     * Remove the specified Employee from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employee = $this->employeeRepository->findWithoutFail($id);

        if (empty($employee)) {
            Flash::error('Student not founssd');

            return redirect(route('admin.employees.index'));
        }

        $employee->status = "Deleted";
        $employee->update();

        Flash::success('Student deleted successfully.');

        return redirect(route('admin.employees.index'));
    }
}
