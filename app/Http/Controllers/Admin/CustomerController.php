<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCustomerRequest;
use App\Http\Requests\Admin\UpdateCustomerRequest;
use App\Models\Admin\Customer;
use App\Repositories\Admin\CustomerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CustomerController extends AppBaseController
{
    /** @var  CustomerRepository */
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepository = $customerRepo;
    }

    // Customer Reports
    public function search(Request $request)
    {
        $from = $request->get('from');
        $to = $request->get('to');
        $customers = null;
        if(!empty($from) || !empty($to)){
            $customers = Customer::
            whereBetween('created_at', [$from, $to])->get();

            return view('admin.customers.search',compact('customers'));
        }
        $customers = Customer::all();
        return view('admin.customers.search',compact('customers'));


    }
    /**
     * Display a listing of the Customer.
     *
     * @param Request $request
     * @return Response
     */
    public function index()
    {
        $customers = Customer::orderBy('id', 'desc')->get();

        return view('admin.customers.index')
            ->with('customers', $customers);
    }

    /**
     * Show the form for creating a new Customer.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created Customer in storage.
     *
     * @param CreateCustomerRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomerRequest $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $image = $request->get('image');

        if ($name != null && $email != null) {

            $customer = new Customer();
            $customer->name = $name;
            $customer->email = $email;
            $customer->status = "Active";
            if ($request->file('image')) {

                $data = \Imageupload::upload($request->file('image'));
                $customer->image = $data['original_filedir'];
//                $customer->save();

            }else{
                $customer->image = "";
//                $customer->save();
            }

            $customer->save();
            Flash::success('Customer saved successfully.');

        }else{
            Flash::success('Customer is not saved.');
        }

        return redirect(route('admin.customers.index'));
    }

    /**
     * Display the specified Customer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('admin.customers.index'));
        }

        return view('admin.customers.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified Customer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('admin.customers.index'));
        }

        return view('admin.customers.edit')->with('customer', $customer);
    }

    /**
     * Update the specified Customer in storage.
     *
     * @param  int              $id
     * @param UpdateCustomerRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {

        $customer = Customer::find($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('admin.customers.index'));
        }

        $name = $request->get('name');
        $email = $request->get('email');
        $image = $request->get('image');
        $status = $request->get('status');

        if ($name != null && $email != null) {
            $customer->name = $name;
            $customer->email = $email;
            $customer->status = $status;

            if ($request->file('image')) {

                $data = \Imageupload::upload($request->file('image'));
                $customer->image = $data['original_filedir'];
//                $customer->save();

            }else{
                $customer->image = "";
//                $customer->save();
            }

            $customer->save();
            Flash::success('Customer saved successfully.');

        }else{
            Flash::success('Customer is not saved.');
        }

        return redirect(route('admin.customers.index'));
    }

    /**
     * Remove the specified Customer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('admin.customers.index'));
        }

        $customer->forceDelete();

        Flash::success('Customer deleted successfully.');

        return redirect(route('admin.customers.index'));
    }
}
