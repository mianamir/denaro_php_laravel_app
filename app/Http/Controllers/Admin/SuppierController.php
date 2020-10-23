<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateSuppierRequest;
use App\Http\Requests\Admin\UpdateSuppierRequest;
use App\Models\Admin\Suppier;
use App\Repositories\Admin\SuppierRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SuppierController extends AppBaseController
{
    /** @var  SuppierRepository */
    private $suppierRepository;

    public function __construct(SuppierRepository $suppierRepo)
    {
        $this->suppierRepository = $suppierRepo;
    }

    /**
     * Display a listing of the Suppier.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->suppierRepository->pushCriteria(new RequestCriteria($request));
        $suppiers = $this->suppierRepository->all();

        return view('admin.suppiers.index')
            ->with('suppiers', $suppiers);
    }

    /**
     * Show the form for creating a new Suppier.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.suppiers.create');
    }

    /**
     * Store a newly created Suppier in storage.
     *
     * @param CreateSuppierRequest $request
     *
     * @return Response
     */
    public function store(CreateSuppierRequest $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $city = $request->get('city');
        $country = $request->get('country');
        $image = $request->file('image');
        $status = $request->get('status');

        if ($name== null) {
            $request->session()->flash('name', 'Name is required');
            return redirect()->back()->withInput();
        }
        if ($email == null) {
            $request->session()->flash('email', 'Email is required');
            return redirect()->back()->withInput();
        }
        if ($phone == null) {
            $request->session()->flash('phone', 'Phone is required');
            return redirect()->back()->withInput();
        }
        if ($address == null) {
            $request->session()->flash('address', 'Address is required');
            return redirect()->back()->withInput();
        }
        if ($city == null) {
            $request->session()->flash('city', 'City is required');
            return redirect()->back()->withInput();
        }
        if ($country == null) {
            $request->session()->flash('country', 'Country is required');
            return redirect()->back()->withInput();
        }
        if ($image == null) {
            $request->session()->flash('image', 'Image is required');
            return redirect()->back()->withInput();
        }


        if ($name != null && $email != null && $phone != null
            && $address != null && $city != null && $country != null && $request->file('image')) {

            $suppier = new Suppier();
            $suppier->name = $name;
            $suppier->email = $email;
            $suppier->phone = $phone;
            $suppier->address = $address;
            $suppier->city = $city;
            $suppier->country = $country;

            $data = \Imageupload::upload($request->file('image'));
            $suppier->image = $data['original_filedir'];

            $suppier->status = "Active";
            $suppier->total_amount = 0;
            $suppier->remaining_amount = 0;

            $suppier->save();
            Flash::success('Supplier saved successfully.');

        }else{
            Flash::success('Supplier is not saved.');
        }

        return redirect(route('admin.suppiers.index'));
    }

    /**
     * Display the specified Suppier.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $supplier = Suppier::find($id);

        if (empty($supplier)) {
            Flash::error('Supplier not found');

            return redirect(route('admin.suppiers.index'));
        }

        return view('admin.suppiers.show')->with('supplier', $supplier);
    }

    /**
     * Show the form for editing the specified Suppier.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $suppier = $this->suppierRepository->findWithoutFail($id);

        if (empty($suppier)) {
            Flash::error('Suppier not found');

            return redirect(route('admin.suppiers.index'));
        }

        return view('admin.suppiers.edit')->with('suppier', $suppier);
    }

    /**
     * Update the specified Suppier in storage.
     *
     * @param  int              $id
     * @param UpdateSuppierRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSuppierRequest $request)
    {
        $suppier = $this->suppierRepository->findWithoutFail($id);

        if (empty($suppier)) {
            Flash::error('Suppier not found');

            return redirect(route('admin.suppiers.index'));
        }

        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $city = $request->get('city');
        $country = $request->get('country');
        $status = $request->get('status');

        if ($name== null) {
            $request->session()->flash('name', 'Name is required');
            return redirect()->back()->withInput();
        }
        if ($email == null) {
            $request->session()->flash('email', 'Email is required');
            return redirect()->back()->withInput();
        }
        if ($phone == null) {
            $request->session()->flash('phone', 'Phone is required');
            return redirect()->back()->withInput();
        }
        if ($address == null) {
            $request->session()->flash('address', 'Address is required');
            return redirect()->back()->withInput();
        }
        if ($city == null) {
            $request->session()->flash('city', 'City is required');
            return redirect()->back()->withInput();
        }
        if ($country == null) {
            $request->session()->flash('country', 'Country is required');
            return redirect()->back()->withInput();
        }
        if ($status == -1) {
            $request->session()->flash('status', 'Status is required');
            return redirect()->back()->withInput();
        }


        if ($name != null && $email != null && $phone != null
            && $address != null && $city != null && $country != null) {

            $suppier->name = $name;
            $suppier->email = $email;
            $suppier->phone = $phone;
            $suppier->address = $address;
            $suppier->city = $city;
            $suppier->country = $country;

            $suppier->status = $status;

            // check null file
            if($request->file('image') == null){
                $suppier->image = $suppier->image;
            }else{

                $data = \Imageupload::upload($request->file('image'));
                $suppier->image = $data['original_filedir'];
            }


            $suppier->save();

            Flash::success('Supplier updated successfully.');

        }else{
            Flash::success('Supplier is not saved.');
        }


        return redirect(route('admin.suppiers.index'));
    }

    /**
     * Remove the specified Suppier from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $suppier = $this->suppierRepository->findWithoutFail($id);

        if (empty($suppier)) {
            Flash::error('Suppier not found');

            return redirect(route('admin.suppiers.index'));
        }

        $suppier->status = "Deleted";
        $suppier->save();

        Flash::success('Suppier deleted successfully.');

        return redirect(route('admin.suppiers.index'));
    }
}
