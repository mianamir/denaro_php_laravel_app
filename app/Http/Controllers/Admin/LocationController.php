<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateLocationRequest;
use App\Http\Requests\Admin\UpdateLocationRequest;
use App\Repositories\Admin\LocationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LocationController extends AppBaseController
{
    /** @var  LocationRepository */
    private $locationRepository;

    public function __construct(LocationRepository $locationRepo)
    {
        $this->locationRepository = $locationRepo;
    }

    /**
     * Display a listing of the Location.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->locationRepository->pushCriteria(new RequestCriteria($request));
        $locations = $this->locationRepository->all();

        return view('admin.locations.index')
            ->with('locations', $locations);
    }

    /**
     * Show the form for creating a new Location.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.locations.create');
    }

    /**
     * Store a newly created Location in storage.
     *
     * @param CreateLocationRequest $request
     *
     * @return Response
     */
    public function store(CreateLocationRequest $request)
    {
        $input = $request->all();

        $location = $this->locationRepository->create($input);

        if ($request->file('image')) {
            $data = \Imageupload::upload($request->file('image'));
            $location->image = $data['original_filedir'];
            $location->update();
        }

        Flash::success('Location saved successfully.');

        return redirect(route('admin.locations.index'));
    }

    /**
     * Display the specified Location.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $location = $this->locationRepository->findWithoutFail($id);

        if (empty($location)) {
            Flash::error('Location not found');

            return redirect(route('admin.locations.index'));
        }

        return view('admin.locations.show')->with('location', $location);
    }

    /**
     * Show the form for editing the specified Location.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $location = $this->locationRepository->findWithoutFail($id);

        if (empty($location)) {
            Flash::error('Location not found');

            return redirect(route('admin.locations.index'));
        }

        return view('admin.locations.edit')->with('location', $location);
    }

    /**
     * Update the specified Location in storage.
     *
     * @param  int $id
     * @param UpdateLocationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLocationRequest $request)
    {
        $location = $this->locationRepository->findWithoutFail($id);

        if (empty($location)) {
            Flash::error('Location not found');

            return redirect(route('admin.locations.index'));
        }

        $location = $this->locationRepository->update($request->all(), $id);

        if ($request->file('image')) {
            $data = \Imageupload::upload($request->file('image'));
            $location->image = $data['original_filedir'];
            $location->update();
        }

        Flash::success('Location updated successfully.');

        return redirect(route('admin.locations.index'));
    }

    /**
     * Remove the specified Location from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $location = $this->locationRepository->findWithoutFail($id);

        if (empty($location)) {
            Flash::error('Location not found');

            return redirect(route('admin.locations.index'));
        }

        $this->locationRepository->delete($id);

        Flash::success('Location deleted successfully.');

        return redirect(route('admin.locations.index'));
    }
}
