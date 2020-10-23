<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateTeacherCourseRequest;
use App\Http\Requests\Admin\UpdateTeacherCourseRequest;
use App\Repositories\Admin\TeacherCourseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TeacherCourseController extends AppBaseController
{
    /** @var  TeacherCourseRepository */
    private $teacherCourseRepository;

    public function __construct(TeacherCourseRepository $teacherCourseRepo)
    {
        $this->teacherCourseRepository = $teacherCourseRepo;
    }

    /**
     * Display a listing of the TeacherCourse.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->teacherCourseRepository->pushCriteria(new RequestCriteria($request));
        $teacherCourses = $this->teacherCourseRepository->all();

        return view('admin.teacher_courses.index')
            ->with('teacherCourses', $teacherCourses);
    }

    /**
     * Show the form for creating a new TeacherCourse.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.teacher_courses.create');
    }

    /**
     * Store a newly created TeacherCourse in storage.
     *
     * @param CreateTeacherCourseRequest $request
     *
     * @return Response
     */
    public function store(CreateTeacherCourseRequest $request)
    {
        $input = $request->all();

        $teacherCourse = $this->teacherCourseRepository->create($input);

        Flash::success('Teacher Course saved successfully.');

        return redirect(route('admin.teacherCourses.index'));
    }

    /**
     * Display the specified TeacherCourse.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teacherCourse = $this->teacherCourseRepository->findWithoutFail($id);

        if (empty($teacherCourse)) {
            Flash::error('Teacher Course not found');

            return redirect(route('admin.teacherCourses.index'));
        }

        return view('admin.teacher_courses.show')->with('teacherCourse', $teacherCourse);
    }

    /**
     * Show the form for editing the specified TeacherCourse.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teacherCourse = $this->teacherCourseRepository->findWithoutFail($id);

        if (empty($teacherCourse)) {
            Flash::error('Teacher Course not found');

            return redirect(route('admin.teacherCourses.index'));
        }

        return view('admin.teacher_courses.edit')->with('teacherCourse', $teacherCourse);
    }

    /**
     * Update the specified TeacherCourse in storage.
     *
     * @param  int              $id
     * @param UpdateTeacherCourseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTeacherCourseRequest $request)
    {
        $teacherCourse = $this->teacherCourseRepository->findWithoutFail($id);

        if (empty($teacherCourse)) {
            Flash::error('Teacher Course not found');

            return redirect(route('admin.teacherCourses.index'));
        }

        $teacherCourse = $this->teacherCourseRepository->update($request->all(), $id);

        Flash::success('Teacher Course updated successfully.');

        return redirect(route('admin.teacherCourses.index'));
    }

    /**
     * Remove the specified TeacherCourse from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teacherCourse = $this->teacherCourseRepository->findWithoutFail($id);

        if (empty($teacherCourse)) {
            Flash::error('Teacher Course not found');

            return redirect(route('admin.teacherCourses.index'));
        }

        $this->teacherCourseRepository->delete($id);

        Flash::success('Teacher Course deleted successfully.');

        return redirect(route('admin.teacherCourses.index'));
    }
}
