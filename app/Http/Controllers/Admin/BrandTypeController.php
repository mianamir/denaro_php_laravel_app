<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateBrandTypeRequest;
use App\Http\Requests\Admin\UpdateBrandTypeRequest;
use App\Repositories\Admin\BrandTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BrandTypeController extends AppBaseController
{
    /** @var  BrandTypeRepository */
    private $brandTypeRepository;

    public function __construct(BrandTypeRepository $brandTypeRepo)
    {
        $this->brandTypeRepository = $brandTypeRepo;
    }

    /**
     * Display a listing of the BrandType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->brandTypeRepository->pushCriteria(new RequestCriteria($request));
        $brandTypes = $this->brandTypeRepository->all();

        return view('admin.brand_types.index')
            ->with('brandTypes', $brandTypes);
    }

    /**
     * Show the form for creating a new BrandType.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.brand_types.create');
    }

    /**
     * Store a newly created BrandType in storage.
     *
     * @param CreateBrandTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateBrandTypeRequest $request)
    {
        $input = $request->all();

        $brandType = $this->brandTypeRepository->create($input);

        Flash::success('Brand Type saved successfully.');

        return redirect(route('admin.brandTypes.index'));
    }

    /**
     * Display the specified BrandType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $brandType = $this->brandTypeRepository->findWithoutFail($id);

        if (empty($brandType)) {
            Flash::error('Brand Type not found');

            return redirect(route('admin.brandTypes.index'));
        }

        return view('admin.brand_types.show')->with('brandType', $brandType);
    }

    /**
     * Show the form for editing the specified BrandType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $brandType = $this->brandTypeRepository->findWithoutFail($id);

        if (empty($brandType)) {
            Flash::error('Brand Type not found');

            return redirect(route('admin.brandTypes.index'));
        }

        return view('admin.brand_types.edit')->with('brandType', $brandType);
    }

    /**
     * Update the specified BrandType in storage.
     *
     * @param  int              $id
     * @param UpdateBrandTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBrandTypeRequest $request)
    {
        $brandType = $this->brandTypeRepository->findWithoutFail($id);

        if (empty($brandType)) {
            Flash::error('Brand Type not found');

            return redirect(route('admin.brandTypes.index'));
        }

        $brandType = $this->brandTypeRepository->update($request->all(), $id);

        Flash::success('Brand Type updated successfully.');

        return redirect(route('admin.brandTypes.index'));
    }

    /**
     * Remove the specified BrandType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $brandType = $this->brandTypeRepository->findWithoutFail($id);

        if (empty($brandType)) {
            Flash::error('Brand Type not found');

            return redirect(route('admin.brandTypes.index'));
        }

        $this->brandTypeRepository->delete($id);

        Flash::success('Brand Type deleted successfully.');

        return redirect(route('admin.brandTypes.index'));
    }
}
