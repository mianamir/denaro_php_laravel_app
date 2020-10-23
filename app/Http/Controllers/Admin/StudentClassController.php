<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateStudentClassRequest;
use App\Http\Requests\Admin\UpdateStudentClassRequest;
use App\Repositories\StudentClassRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class StudentClassController extends AppBaseController
{
    /** @var  StudentClassRepository */
    private $studentClassRepository;

    public function __construct(StudentClassRepository $studentClassRepo)
    {
        $this->studentClassRepository = $studentClassRepo;
    }

    /**
     * Display a listing of the StudentClass.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->studentClassRepository->pushCriteria(new RequestCriteria($request));
        $studentClasses = $this->studentClassRepository->all();

        return view('admin.student_classes.index')->with('studentClasses', $studentClasses);
    }

    /**
     * Show the form for creating a new StudentClass.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.student_classes.create');
    }

    /**
     * Store a newly created StudentClass in storage.
     *
     * @param CreateStudentClassRequest $request
     *
     * @return Response
     */
    public function store(CreateStudentClassRequest $request)
    {
        $input = $request->all();

        $studentClass = $this->studentClassRepository->create($input);

        Flash::success('Student Class saved successfully.');

        return redirect(route('admin.studentClasses.index'));
    }

    /**
     * Display the specified StudentClass.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $studentClass = $this->studentClassRepository->findWithoutFail($id);

        if (empty($studentClass)) {
            Flash::error('Student Class not found');

            return redirect(route('admin.studentClasses.index'));
        }

        return view('admin.student_classes.show')->with('studentClass', $studentClass);
    }

    public function class_subjects($id)
    {
        $studentClass = $this->studentClassRepository->findWithoutFail($id);

        if (empty($studentClass)) {
            Flash::error('Student Class not found');

            return redirect(route('admin.studentClasses.index'));
        }

        $subjects = $studentClass->subjects;



        return view('admin.student_classes.class_subjects')->with('subjects', $subjects);
    }

    /**
     * Show the form for editing the specified StudentClass.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $studentClass = $this->studentClassRepository->findWithoutFail($id);

        if (empty($studentClass)) {
            Flash::error('Student Class not found');

            return redirect(route('admin.studentClasses.index'));
        }

        return view('admin.student_classes.edit')->with('studentClass', $studentClass);
    }

    /**
     * Update the specified StudentClass in storage.
     *
     * @param  int              $id
     * @param UpdateStudentClassRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStudentClassRequest $request)
    {
        $studentClass = $this->studentClassRepository->findWithoutFail($id);

        if (empty($studentClass)) {
            Flash::error('Student Class not found');

            return redirect(route('admin.studentClasses.index'));
        }

        $studentClass = $this->studentClassRepository->update($request->all(), $id);

        Flash::success('Student Class updated successfully.');

        return redirect(route('admin.studentClasses.index'));
    }

    /**
     * Remove the specified StudentClass from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $studentClass = $this->studentClassRepository->findWithoutFail($id);

        if (empty($studentClass)) {
            Flash::error('Student Class not found');

            return redirect(route('admin.studentClasses.index'));
        }

        $this->studentClassRepository->delete($id);

        Flash::success('Student Class deleted successfully.');

        return redirect(route('admin.studentClasses.index'));
    }
}
