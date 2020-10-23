<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\MapDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateMapRequest;
use App\Http\Requests\Admin\UpdateMapRequest;
use App\Repositories\Admin\MapRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MapController extends AppBaseController
{
    /** @var  MapRepository */
    private $mapRepository;

    public function __construct(MapRepository $mapRepo)
    {
        $this->mapRepository = $mapRepo;
    }

    /**
     * Display a listing of the Map.
     *
     * @param MapDataTable $mapDataTable
     * @return Response
     */
    public function index(MapDataTable $mapDataTable)
    {
        return $mapDataTable->render('admin.maps.index');
    }

    /**
     * Show the form for creating a new Map.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.maps.create');
    }

    /**
     * Store a newly created Map in storage.
     *
     * @param CreateMapRequest $request
     *
     * @return Response
     */
    public function store(CreateMapRequest $request)
    {
        $input = $request->all();

        $map = $this->mapRepository->create($input);

        if ($request->file('image')) {
            $data = \Imageupload::upload($request->file('image'));
            $map->image = $data['original_filedir'];
            $map->update();
        }

        Flash::success('Map saved successfully.');

        return redirect(route('admin.maps.index'));
    }

    /**
     * Display the specified Map.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $map = $this->mapRepository->findWithoutFail($id);

        if (empty($map)) {
            Flash::error('Map not found');

            return redirect(route('admin.maps.index'));
        }

        return view('admin.maps.show')->with('map', $map);
    }

    /**
     * Show the form for editing the specified Map.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $map = $this->mapRepository->findWithoutFail($id);

        if (empty($map)) {
            Flash::error('Map not found');

            return redirect(route('admin.maps.index'));
        }

        return view('admin.maps.edit')->with('map', $map);
    }

    /**
     * Update the specified Map in storage.
     *
     * @param  int $id
     * @param UpdateMapRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMapRequest $request)
    {
        $map = $this->mapRepository->findWithoutFail($id);

        if (empty($map)) {
            Flash::error('Map not found');

            return redirect(route('admin.maps.index'));
        }

        $map = $this->mapRepository->update($request->all(), $id);


        if ($request->file('image')) {
            $data = \Imageupload::upload($request->file('image'));
            $map->image = $data['original_filedir'];
            $map->update();
        }

        Flash::success('Map updated successfully.');

        return redirect(route('admin.maps.index'));
    }

    /**
     * Remove the specified Map from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $map = $this->mapRepository->findWithoutFail($id);

        if (empty($map)) {
            Flash::error('Map not found');

            return redirect(route('admin.maps.index'));
        }

        $this->mapRepository->delete($id);

        Flash::success('Map deleted successfully.');

        return redirect(route('admin.maps.index'));
    }
}
