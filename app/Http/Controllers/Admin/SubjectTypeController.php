<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateSubjectTypeRequest;
use App\Http\Requests\Admin\UpdateSubjectTypeRequest;
use App\Repositories\Admin\SubjectTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SubjectTypeController extends AppBaseController
{
    /** @var  SubjectTypeRepository */
    private $subjectTypeRepository;

    public function __construct(SubjectTypeRepository $subjectTypeRepo)
    {
        $this->subjectTypeRepository = $subjectTypeRepo;
    }

    /**
     * Display a listing of the SubjectType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->subjectTypeRepository->pushCriteria(new RequestCriteria($request));
        $subjectTypes = $this->subjectTypeRepository->all();

        return view('admin.subject_types.index')
            ->with('subjectTypes', $subjectTypes);
    }

    /**
     * Show the form for creating a new SubjectType.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.subject_types.create');
    }

    /**
     * Store a newly created SubjectType in storage.
     *
     * @param CreateSubjectTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateSubjectTypeRequest $request)
    {
        $input = $request->all();

        $subjectType = $this->subjectTypeRepository->create($input);

        Flash::success('Subject Type saved successfully.');

        return redirect(route('admin.subjectTypes.index'));
    }

    /**
     * Display the specified SubjectType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subjectType = $this->subjectTypeRepository->findWithoutFail($id);

        if (empty($subjectType)) {
            Flash::error('Subject Type not found');

            return redirect(route('admin.subjectTypes.index'));
        }

        return view('admin.subject_types.show')->with('subjectType', $subjectType);
    }

    /**
     * Show the form for editing the specified SubjectType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subjectType = $this->subjectTypeRepository->findWithoutFail($id);

        if (empty($subjectType)) {
            Flash::error('Subject Type not found');

            return redirect(route('admin.subjectTypes.index'));
        }

        return view('admin.subject_types.edit')->with('subjectType', $subjectType);
    }

    /**
     * Update the specified SubjectType in storage.
     *
     * @param  int              $id
     * @param UpdateSubjectTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubjectTypeRequest $request)
    {
        $subjectType = $this->subjectTypeRepository->findWithoutFail($id);

        if (empty($subjectType)) {
            Flash::error('Subject Type not found');

            return redirect(route('admin.subjectTypes.index'));
        }

        $subjectType = $this->subjectTypeRepository->update($request->all(), $id);

        Flash::success('Subject Type updated successfully.');

        return redirect(route('admin.subjectTypes.index'));
    }

    /**
     * Remove the specified SubjectType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subjectType = $this->subjectTypeRepository->findWithoutFail($id);

        if (empty($subjectType)) {
            Flash::error('Subject Type not found');

            return redirect(route('admin.subjectTypes.index'));
        }

        $this->subjectTypeRepository->delete($id);

        Flash::success('Subject Type deleted successfully.');

        return redirect(route('admin.subjectTypes.index'));
    }
}
