<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCEORequest;
use App\Http\Requests\Admin\UpdateCEORequest;
use App\Repositories\Admin\CEORepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CEOController extends AppBaseController
{
    /** @var  CEORepository */
    private $cEORepository;

    public function __construct(CEORepository $cEORepo)
    {
        $this->cEORepository = $cEORepo;
    }

    /**
     * Display a listing of the CEO.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cEORepository->pushCriteria(new RequestCriteria($request));
        $cEOS = $this->cEORepository->all();

        return view('admin.c_e_o_s.index')
            ->with('cEOS', $cEOS);
    }

    /**
     * Show the form for creating a new CEO.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.c_e_o_s.create');
    }

    /**
     * Store a newly created CEO in storage.
     *
     * @param CreateCEORequest $request
     *
     * @return Response
     */
    public function store(CreateCEORequest $request)
    {
        $input = $request->all();

        $cEO = $this->cEORepository->create($input);
        
         if ($request->file('image')) {

            $data = \Imageupload::upload($request->file('image'));
            $cEO->image = $data['original_filedir'];
            $cEO->save();

        }

        Flash::success('C E O saved successfully.');

        return redirect(route('admin.cEOS.index'));
    }

    /**
     * Display the specified CEO.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cEO = $this->cEORepository->findWithoutFail($id);

        if (empty($cEO)) {
            Flash::error('C E O not found');

            return redirect(route('admin.cEOS.index'));
        }

        return view('admin.c_e_o_s.show')->with('cEO', $cEO);
    }

    /**
     * Show the form for editing the specified CEO.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cEO = $this->cEORepository->findWithoutFail($id);

        if (empty($cEO)) {
            Flash::error('C E O not found');

            return redirect(route('admin.cEOS.index'));
        }

        return view('admin.c_e_o_s.edit')->with('cEO', $cEO);
    }

    /**
     * Update the specified CEO in storage.
     *
     * @param  int              $id
     * @param UpdateCEORequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCEORequest $request)
    {
        $cEO = $this->cEORepository->findWithoutFail($id);

        if (empty($cEO)) {
            Flash::error('C E O not found');

            return redirect(route('admin.cEOS.index'));
        }

        $cEO = $this->cEORepository->update($request->all(), $id);
       
         if ($request->file('image')) {

            $data = \Imageupload::upload($request->file('image'));
            $cEO->image = $data['original_filedir'];
            $cEO->save();

        }

        Flash::success('C E O updated successfully.');

        return redirect(route('admin.cEOS.index'));
    }

    /**
     * Remove the specified CEO from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cEO = $this->cEORepository->findWithoutFail($id);

        if (empty($cEO)) {
            Flash::error('C E O not found');

            return redirect(route('admin.cEOS.index'));
        }

        $this->cEORepository->delete($id);

        Flash::success('C E O deleted successfully.');

        return redirect(route('admin.cEOS.index'));
    }
}
