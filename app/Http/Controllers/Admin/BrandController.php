<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateBrandRequest;
use App\Http\Requests\Admin\UpdateBrandRequest;
use App\Models\Admin\Brand;
use App\Repositories\Admin\BrandRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BrandController extends AppBaseController
{
    /** @var  BrandRepository */
    private $brandRepository;

    public function __construct(BrandRepository $brandRepo)
    {
        $this->brandRepository = $brandRepo;
    }

    /**
     * Display a listing of the Brand.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->brandRepository->pushCriteria(new RequestCriteria($request));
        $brands = $this->brandRepository->all();

        return view('admin.brands.index')
            ->with('brands', $brands);
    }

    /**
     * Show the form for creating a new Brand.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created Brand in storage.
     *
     * @param CreateBrandRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $id = $request->get('type');


        if ($request->file('file') && $id !== null) {
            $brand = new Brand();
            $data = \Imageupload::upload($request->file('file'));
            $brand->image = $data['original_filedir'];
            $brand->brand_type_id = $id;
            $brand->save();
            Flash::success('Brand saved successfully.');
        }
        else{
            Flash::error('Error: Unable to save brand.');
        }
        return redirect(route('admin.brands.index'));
    }

    /**
     * Display the specified Brand.
     *
     * @param  int $id
     *
     * @return Response
     */
//    public function show($id)
//    {
//        $brand = Brand::findOrFail($id);
//
//        if (empty($brand)) {
//            Flash::error('Brand not found');
//
//            return redirect(route('admin.brands.index'));
//        }
//
//        return view('admin.brands.show')->with('brand', $brand);
//    }

    /**
     * Show the form for editing the specified Brand.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);

        if (empty($brand)) {
            Flash::error('Brand not found');

            return redirect(route('admin.brands.index'));
        }

        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified Brand in storage.
     *
     * @param  int              $id
     * @param UpdateBrandRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $brand = Brand::findOrFail($id);
        $id = $request->get('type');

        if ($request->file('file') && $id !== null) {

            $data = \Imageupload::upload($request->file('file'));
            $brand->image = $data['original_filedir'];
            $brand->brand_type_id = $id;
            $brand->update();
            Flash::success('Brand updated successfully.');
        }
        else{
            Flash::error('Error: Unable to update brand.');
        }
        return redirect(route('admin.brands.index'));
    }

    /**
     * Remove the specified Brand from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);

        if (empty($brand)) {
            Flash::error('Brand not found');

            return redirect(route('admin.brands.index'));
        }

        $brand->delete();

        Flash::success('Brand deleted successfully.');

        return redirect(route('admin.brands.index'));
    }
}
