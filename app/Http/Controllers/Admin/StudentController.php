<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateStudentRequest;
use App\Http\Requests\Admin\UpdateStudentRequest;
use App\Models\Admin\Student;
use App\Models\Admin\StudentClass;
use App\Models\Admin\StudentCourse;
use App\Models\Admin\Subject;
use App\Models\Admin\Teacher;
use App\Models\Admin\TeacherCourse;
use App\Repositories\Admin\StudentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use DB;

class StudentController extends AppBaseController
{
    /** @var  StudentRepository */
    private $studentRepository;

    public function __construct(StudentRepository $studentRepo)
    {
        $this->studentRepository = $studentRepo;
    }

    /**
     * Display a listing of the Student.
     *
     * @param Request $request
     * @return Response
     */
    public function index()
    {
        $students = Student::all();

        return view('admin.students.index', compact('students'));
    }
    
    public function students_by_class($class_id)
    {
        $student_class = StudentClass::find($class_id);
        $students = Student::where('class_id', $class_id)->get();

        return view('admin.students.index-students-by-class', compact('students', 'student_class'));
    }
    
    /**
     * Show the form for creating a new Student.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created Student in storage.
     *
     * @param CreateStudentRequest $request
     *
     * @return Response
     */
    public function store(CreateStudentRequest $request)
    {
        $check_email_student = Student::where('email', $request->get('email'))->first();

        if ($check_email_student) {
            $request->session()->flash('student_email', 'Error: This email is already exist.');
            return redirect()->back()->withInput();
        }

        $check_phone_student = Student::where('phone', $request->get('phone'))->first();

        if ($check_phone_student) {
            $request->session()->flash('student_phone', 'Error: This phone is already exist.');
            return redirect()->back()->withInput();
        }

        $input = $request->all();
        $input['password2'] = $request->get('password');
        $input['password'] = \Hash::make($request->get('password'));
        $input['status'] = 'inactive';

        $file = $request->file('profile_pic');

        $student = $this->studentRepository->create($input);

        if ($request->file('profile_pic')) {
            $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
            $file->move('students', $fileName);
            $student->profile_pic = $fileName;
            $student->save();

        }else{
            $student->profile_pic = "image_200_200.png";
            $student->save();
        }

        try{
            $students = Teacher::all();
            $temp_student_code =$students->last();
            $student->code = intval($temp_student_code->id) +1;
            $student->save();
        }catch (\Exception $e){
            $student->teacher_code = 1;
            $student->save();
        }

        Flash::success('Student saved successfully.');

        return redirect(route('admin.students.index'));
    }

    /**
     * Display the courses according to the student class.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function student_course_registration($student_id)
    {
        $student = Student::find($student_id);

        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('admin.students.index'));
        }

        $courses = Subject::
        where(['class_id' => $student->class_id, 'status' => 'active'])->get();

        return view('admin.students.student-course-registration', compact('student', 'courses'));
    }

    public function student_course_registration_post(Request $request)
    {
        $student_id = $request->get('student_id');
        $student = Student::find($student_id);
        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('admin.students.index'));
        }

        $course_id = $request->get('course_id');
        $course = Subject::find($course_id);
        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('admin.students.index'));
        }

        $student_course = StudentCourse::
            where(['student_id'=> $student->id, 'subject_id' => $course->id])->first();

        if ($student_course) {
            $request->session()->flash('student_course_duplicate', 'Error: This is student is already registered to this course.');
            return redirect()->back()->withInput();
        }

        $student_course = new StudentCourse();
        $student_course->student_id = $student->id;
        $student_course->subject_id = $course->id;
        $student_course->save();


        $teacher_course = TeacherCourse::where('course_id', $course->id)->first();
        $teacher = Teacher::find($teacher_course->teacher_id);

        $teacher_id = $teacher->id;
        $student_id = $student->id;
        $course_id = $course->id;

        return redirect(route('admin.student.course.details', [$teacher_id, $student_id, $course_id]));
    }

    public function student_course_details($teacher_id, $student_id, $course_id)
    {

        $student = Student::find($student_id);
        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('admin.students.index'));
        }

        $course = Subject::find($course_id);
        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('admin.students.index'));
        }


        $teacher = Teacher::find($teacher_id);
        if (empty($teacher)) {
            Flash::error('Teacher Course not found');

            return redirect(route('admin.students.index'));
        }

        return view('admin.students.student-course-registration-details', compact('teacher','student', 'course'));
    }


    public function student_registered_courses_list($student_id)
    {
        $student = Student::find($student_id);
        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('admin.students.index'));
        }

        $student_courses = StudentCourse::where('student_id', $student_id)->get();


        return view('admin.students.student-registered-courses-list', compact('student', 'student_courses'));
    }


    /**
     * Display the specified Student.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $student = $this->studentRepository->findWithoutFail($id);

        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('admin.students.index'));
        }

        return view('admin.students.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified Student.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $student = $this->studentRepository->findWithoutFail($id);

        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('admin.students.index'));
        }

        return view('admin.students.edit')->with('student', $student);
    }

    /**
     * Update the specified Student in storage.
     *
     * @param  int              $id
     * @param UpdateStudentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStudentRequest $request)
    {

//        $check_email_student = Student::where('email', $request->get('email'))->first();
//
//        if ($check_email_student) {
//            $request->session()->flash('student_email', 'Error: This email is already exist.');
//            return redirect()->back()->withInput();
//        }
//
//        $check_phone_student = Student::where('phone', $request->get('phone'))->first();
//
//        if ($check_phone_student) {
//            $request->session()->flash('student_phone', 'Error: This phone is already exist.');
//            return redirect()->back()->withInput();
//        }



        $student = $this->studentRepository->findWithoutFail($id);

        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('admin.students.index'));
        }


        $student = $this->studentRepository->update($request->all(), $id);

        $file = $request->file('profile_pic');

        if ($request->file('profile_pic')) {
            $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
            $file->move('students', $fileName);
            $student->profile_pic = $fileName;
            $student->save();

        }

        Flash::success('Student updated successfully.');

        return redirect(route('admin.students.index'));
    }

    /**
     * Remove the specified Student from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $student = $this->studentRepository->findWithoutFail($id);

        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('admin.students.index'));
        }

        $this->studentRepository->delete($id);

        Flash::success('Student deleted successfully.');

        return redirect(route('admin.students.index'));
    }
}
