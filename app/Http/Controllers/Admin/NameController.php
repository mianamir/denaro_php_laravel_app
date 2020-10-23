<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\NameDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateNameRequest;
use App\Http\Requests\Admin\UpdateNameRequest;
use App\Repositories\Admin\NameRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class NameController extends AppBaseController
{
    /** @var  NameRepository */
    private $nameRepository;

    public function __construct(NameRepository $nameRepo)
    {
        $this->nameRepository = $nameRepo;
    }

    /**
     * Display a listing of the Name.
     *
     * @param NameDataTable $nameDataTable
     * @return Response
     */
    public function index(NameDataTable $nameDataTable)
    {
        return $nameDataTable->render('admin.names.index');
    }

    /**
     * Show the form for creating a new Name.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.names.create');
    }

    /**
     * Store a newly created Name in storage.
     *
     * @param CreateNameRequest $request
     *
     * @return Response
     */
    public function store(CreateNameRequest $request)
    {
        $input = $request->all();

        $name = $this->nameRepository->create($input);

        Flash::success('Name saved successfully.');

        return redirect(route('admin.names.index'));
    }

    /**
     * Display the specified Name.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $name = $this->nameRepository->findWithoutFail($id);

        if (empty($name)) {
            Flash::error('Name not found');

            return redirect(route('admin.names.index'));
        }

        return view('admin.names.show')->with('name', $name);
    }

    /**
     * Show the form for editing the specified Name.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $name = $this->nameRepository->findWithoutFail($id);

        if (empty($name)) {
            Flash::error('Name not found');

            return redirect(route('admin.names.index'));
        }

        return view('admin.names.edit')->with('name', $name);
    }

    /**
     * Update the specified Name in storage.
     *
     * @param  int              $id
     * @param UpdateNameRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNameRequest $request)
    {
        $name = $this->nameRepository->findWithoutFail($id);

        if (empty($name)) {
            Flash::error('Name not found');

            return redirect(route('admin.names.index'));
        }

        $name = $this->nameRepository->update($request->all(), $id);

        Flash::success('Name updated successfully.');

        return redirect(route('admin.names.index'));
    }

    /**
     * Remove the specified Name from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $name = $this->nameRepository->findWithoutFail($id);

        if (empty($name)) {
            Flash::error('Name not found');

            return redirect(route('admin.names.index'));
        }

        $this->nameRepository->delete($id);

        Flash::success('Name deleted successfully.');

        return redirect(route('admin.names.index'));
    }
}
