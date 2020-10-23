<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateClassSubjectRequest;
use App\Http\Requests\Admin\UpdateClassSubjectRequest;
use App\Repositories\Admin\ClassSubjectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ClassSubjectController extends AppBaseController
{
    /** @var  ClassSubjectRepository */
    private $classSubjectRepository;

    public function __construct(ClassSubjectRepository $classSubjectRepo)
    {
        $this->classSubjectRepository = $classSubjectRepo;
    }

    /**
     * Display a listing of the ClassSubject.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->classSubjectRepository->pushCriteria(new RequestCriteria($request));
        $classSubjects = $this->classSubjectRepository->all();

        return view('admin.class_subjects.index')
            ->with('classSubjects', $classSubjects);
    }

    /**
     * Show the form for creating a new ClassSubject.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.class_subjects.create');
    }

    /**
     * Store a newly created ClassSubject in storage.
     *
     * @param CreateClassSubjectRequest $request
     *
     * @return Response
     */
    public function store(CreateClassSubjectRequest $request)
    {
        $input = $request->all();

        $classSubject = $this->classSubjectRepository->create($input);

        Flash::success('Class Subject saved successfully.');

        return redirect(route('admin.classSubjects.index'));
    }

    /**
     * Display the specified ClassSubject.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classSubject = $this->classSubjectRepository->findWithoutFail($id);

        if (empty($classSubject)) {
            Flash::error('Class Subject not found');

            return redirect(route('admin.classSubjects.index'));
        }

        return view('admin.class_subjects.show')->with('classSubject', $classSubject);
    }

    /**
     * Show the form for editing the specified ClassSubject.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classSubject = $this->classSubjectRepository->findWithoutFail($id);

        if (empty($classSubject)) {
            Flash::error('Class Subject not found');

            return redirect(route('admin.classSubjects.index'));
        }

        return view('admin.class_subjects.edit')->with('classSubject', $classSubject);
    }

    /**
     * Update the specified ClassSubject in storage.
     *
     * @param  int              $id
     * @param UpdateClassSubjectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassSubjectRequest $request)
    {
        $classSubject = $this->classSubjectRepository->findWithoutFail($id);

        if (empty($classSubject)) {
            Flash::error('Class Subject not found');

            return redirect(route('admin.classSubjects.index'));
        }

        $classSubject = $this->classSubjectRepository->update($request->all(), $id);

        Flash::success('Class Subject updated successfully.');

        return redirect(route('admin.classSubjects.index'));
    }

    /**
     * Remove the specified ClassSubject from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classSubject = $this->classSubjectRepository->findWithoutFail($id);

        if (empty($classSubject)) {
            Flash::error('Class Subject not found');

            return redirect(route('admin.classSubjects.index'));
        }

        $this->classSubjectRepository->delete($id);

        Flash::success('Class Subject deleted successfully.');

        return redirect(route('admin.classSubjects.index'));
    }
}
