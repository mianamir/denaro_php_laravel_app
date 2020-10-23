<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateSubjectRequest;
use App\Http\Requests\Admin\UpdateSubjectRequest;
use App\Models\Admin\Teacher;
use App\Models\Admin\TeacherCourse;
use App\Repositories\Admin\SubjectRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Admin\StudentClass;
use App\Models\Admin\Subject;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SubjectController extends AppBaseController
{
    /** @var  SubjectRepository */
    private $subjectRepository;

    public function __construct(SubjectRepository $subjectRepo)
    {
        $this->subjectRepository = $subjectRepo;
    }

    /**
     * Display a listing of the Subject.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $subjects = Subject::orderBy('id', 'desc')->get();

        return view('admin.subjects.index')
            ->with('subjects', $subjects);
    }
    
    public function courses_by_class($class_id)
    {
        $course_class = StudentClass::find($class_id);
        $subjects = Subject::where('class_id', $class_id)->orderBy('id', 'desc')->get();

        return view('admin.subjects.courses-by-class', compact('course_class', 'subjects'));

    }

    /**
     * Show the form for creating a new Subject.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.subjects.create');
    }

    /**
     * Store a newly created Subject in storage.
     *
     * @param CreateSubjectRequest $request
     *
     * @return Response
     */
    public function store(CreateSubjectRequest $request)
    {
        $input = $request->all();

        $subject = $this->subjectRepository->create($input);

        $subject->course_type = $input['course_type_id'];

        $file = $request->file('image');
        $file1 = $request->file('promo_video_featured_image');

        if ($file != null && $request->file('image')) {
            $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
            $file->move('subjects', $fileName);
            $subject->image = $fileName;
            $subject->save();
        }else{
            $subject->image = 'image_320_240.jpg';
            $subject->save();
        }

        if ($request->get('is_featured') == true){
            $subject->is_featured = 1;
            $subject->save();
        }else{
            $subject->is_featured = 0;
            $subject->save();
        }

        try{
            $subjects = Subject::all();
            $temp_subject_code =$subjects->last();
            $subject->code = intval($temp_subject_code->id) +1;
            $subject->save();
        }catch (\Exception $e){
            $subject->teacher_code = 1;
            $subject->save();
        }

        if ($file1 != null && $request->file('promo_video_featured_image')) {

            $fileName = str_random() . time() . '.' . $file1->getClientOriginalExtension();
            $file1->move('subjects', $fileName);
            $subject->promo_video_featured_image = $fileName;
            $subject->save();

        }else{
            $subject->promo_video_featured_image = 'image_320_240.jpg';
            $subject->save();
        }

        $teacher_course = new TeacherCourse();
        $teacher_course->teacher_id = $input['course_teacher_id'];
        $teacher_course->course_id = $subject->id;
        $teacher_course->save();


        Flash::success('Subject saved successfully.');

        return redirect(route('admin.subjects.index'));
    }

    /**
     * Display the specified Subject.
     *
     * @param  int $id
     *
     * @return Response
     */

public  function subjects_byclass(Request $request){
    $data=$request->all();
    $classes=Subject::where("class_id",$data['id'])->get();
    echo '<option value="-1"> Select Subject</option>';
    foreach($classes as $class){
        echo '<option value="'.$class->id.'">'.$class->title.'</option>';
    }
    exit;
}

    public function show($id)
    {
        $subject = $this->subjectRepository->findWithoutFail($id);

        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('admin.subjects.index'));
        }

        return view('admin.subjects.show')->with('subject', $subject);
    }

    /**
     * Show the form for editing the specified Subject.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subject = $this->subjectRepository->findWithoutFail($id);

        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('admin.subjects.index'));
        }

        $teacher_course = TeacherCourse::where('course_id', $subject->id)->first();
        $teacher = Teacher::find($teacher_course->teacher_id);

        return view('admin.subjects.edit', compact('subject', 'teacher'));
    }

    /**
     * Update the specified Subject in storage.
     *
     * @param  int              $id
     * @param UpdateSubjectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubjectRequest $request)
    {
        $input = $request->all();

        $subject = $this->subjectRepository->findWithoutFail($id);

        if (!isset($subject)) {
            Flash::error('Subject not found');

            return redirect(route('admin.subjects.index'));
        }

        $subject = $this->subjectRepository->update($request->all(), $id);

        $subject->course_type = $input['course_type_id'];

        if ($request->get('is_featured') == true){
        $subject->is_featured = 1;
        $subject->save();
        }else{
        $subject->is_featured = 0;
        $subject->save();
        }

        $file = $request->file('image');
        $file1 = $request->file('promo_video_featured_image');

        if ($file != null && $request->file('image')) {
            $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
            $file->move('subjects', $fileName);
            $subject->image = $fileName;
            $subject->save();
        }else{
            $subject->image = $subject->image;
            $subject->save();
        }

        if ($file1 != null && $request->file('promo_video_featured_image')) {

            $fileName = str_random() . time() . '.' . $file1->getClientOriginalExtension();
            $file1->move('subjects', $fileName);
            $subject->promo_video_featured_image = $fileName;
            $subject->save();

        }else{
            $subject->image = $subject->image;
            $subject->save();
        }

        $teacher_course = TeacherCourse::where('course_id', $subject->id)->first();
        $teacher_course->teacher_id = $input['course_teacher_id'];
        $teacher_course->save();

        Flash::success('Subject updated successfully.');

        return redirect(route('admin.subjects.index'));
    }

    /**
     * Remove the specified Subject from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subject = $this->subjectRepository->findWithoutFail($id);

        if (!isset($subject)) {
            Flash::error('Subject not found');

            return redirect(route('admin.subjects.index'));
        }

        $this->subjectRepository->delete($id);

        Flash::success('Subject deleted successfully.');

        return redirect(route('admin.subjects.index'));
    }
}
