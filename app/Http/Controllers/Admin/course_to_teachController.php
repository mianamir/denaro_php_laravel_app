<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Createcourse_to_teachRequest;
use App\Http\Requests\Admin\Updatecourse_to_teachRequest;
use App\Models\Admin\CourseToTeach;
use App\Repositories\Admin\course_to_teachRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class course_to_teachController extends AppBaseController
{
    /** @var  course_to_teachRepository */
    private $courseToTeachRepository;

    public function __construct(course_to_teachRepository $courseToTeachRepo)
    {
        $this->course_to_teachRepository = $courseToTeachRepo;
    }

    /**
     * Display a listing of the course_to_teach.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $courseToTeaches = CourseToTeach::orderBy('id', 'desc')->get();

        return view('admin.course_to_teaches.index', compact('courseToTeaches'));
    }

    /**
     * Show the form for creating a new course_to_teach.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.course_to_teaches.create');
    }

    /**
     * Store a newly created course_to_teach in storage.
     *
     * @param Createcourse_to_teachRequest $request
     *
     * @return Response
     */
    public function store(Createcourse_to_teachRequest $request)
    {
        $input = $request->all();

        $courseToTeach = $this->course_to_teachRepository->create($input);

        Flash::success('Course To Teach saved successfully.');

        return redirect(route('admin.courseToTeaches.index'));
    }

    /**
     * Display the specified course_to_teach.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $courseToTeach = CourseToTeach::find($id);

        if (empty($courseToTeach)) {
            Flash::error('Course To Teach not found');

            return redirect(route('admin.courseToTeaches.index'));
        }

        return view('admin.course_to_teaches.show')->with('courseToTeach', $courseToTeach);
    }

    /**
     * Show the form for editing the specified course_to_teach.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $courseToTeach = CourseToTeach::find($id);

        if (empty($courseToTeach)) {
            Flash::error('Course To Teach not found');

            return redirect(route('admin.courseToTeaches.index'));
        }

        return view('admin.course_to_teaches.edit')->with('courseToTeach', $courseToTeach);
    }

    /**
     * Update the specified course_to_teach in storage.
     *
     * @param  int              $id
     * @param Updatecourse_to_teachRequest $request
     *
     * @return Response
     */
    public function update($id, Updatecourse_to_teachRequest $request)
    {
        $courseToTeach = CourseToTeach::find($id);

        if (empty($courseToTeach)) {
            Flash::error('Course To Teach not found');

            return redirect(route('admin.courseToTeaches.index'));
        }

        $courseToTeach = $this->course_to_teachRepository->update($request->all(), $id);

        Flash::success('Course To Teach updated successfully.');

        return redirect(route('admin.courseToTeaches.index'));
    }

    /**
     * Remove the specified course_to_teach from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $courseToTeach = CourseToTeach::find($id);

        if (empty($courseToTeach)) {
            Flash::error('Course To Teach not found');

            return redirect(route('admin.courseToTeaches.index'));
        }

        $this->course_to_teachRepository->delete($id);

        Flash::success('Course To Teach deleted successfully.');

        return redirect(route('admin.courseToTeaches.index'));
    }
}
