<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateTeacherRequest;
use App\Http\Requests\Admin\UpdateTeacherRequest;
use App\Models\Admin\Teacher;
use App\Models\Admin\CourseToTeach;
use App\Repositories\Admin\TeacherRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use DB;
use Illuminate\Foundation\Validation\ValidatesRequests;


class TeacherController extends AppBaseController
{
    use ValidatesRequests;
    /** @var  TeacherRepository */
    private $teacherRepository;

    public function __construct(TeacherRepository $teacherRepo)
    {
        $this->teacherRepository = $teacherRepo;
    }

    /**
     * Display a listing of the Teacher.
     *
     * @param Request $request
     * @return Response
     */



    public function index()
    {
        $teachers = Teacher::where(['type' =>  true])->orderBy('id', 'desc')->get();

        return view('admin.teachers.index', compact('teachers'));
    }
    
    public function teachers_by_course_to_teach($course_to_teach_id)
    {
        $course_to_teach = CourseToTeach::find($course_to_teach_id);
        $teachers = Teacher::where(['course_to_teach_id' => $course_to_teach->id])->orderBy('id', 'desc')->get();
        return view('admin.teachers.index-teachers-by-course-to-teach', compact('teachers', 'course_to_teach'));
    }

    /**
     * Show the form for creating a new Teacher.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created Teacher in storage.
     *
     * @param CreateTeacherRequest $request
     *
     * @return Response
     */
    public function store(CreateTeacherRequest $request)
    {
        $input = $request->all();

        $file = $request->file('profile_pic');

        $teacher = $this->teacherRepository->create($input);

        $teacher->password2 = $request->get('password');
        $teacher->password = \Hash::make($request->get('password'));
        $teacher->type = 1;
        $teacher->save();

        if ($request->file('profile_pic')) {
            $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
            $file->move('teachers', $fileName);
            $teacher->profile_pic = $fileName;
            $teacher->save();

        }

        try{
            $teachers = Teacher::all();
            $temp_teacher_code =$teachers->last();
            $teacher->teacher_code = intval($temp_teacher_code->id) +1;
            $teacher->save();
        }catch (\Exception $e){
            $teacher->teacher_code = 1;
            $teacher->save();
        }

        Flash::success('Teacher saved successfully.');

        return redirect(route('admin.teachers.index'));
    }

    /**
     * Display the specified Teacher.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teacher = $this->teacherRepository->findWithoutFail($id);

        if (empty($teacher)) {
            Flash::error('Teacher not found');

            return redirect(route('admin.teachers.index'));
        }

        return view('admin.teachers.show')->with('teacher', $teacher);
    }


    public function courses($id)
    {
        $teacher = $this->teacherRepository->findWithoutFail($id);

        if (!isset($teacher)) {
            Flash::error('Teacher not found');

            return redirect(route('admin.teachers.index'));
        }

        $subjects = $teacher->courses()->orderBy('id', 'desc')->get();

        return view('admin.teachers.courses-index', compact('teacher', 'subjects'));
    }

    /**
     * Teachers by expertise
     * @param int $course_to_teach
     * @return response
     */
    public function teachers_by_expertise(Request $request){
        $data=$request->all();
        $teachers = Teacher::
            where(["course_to_teach_id" =>  $data['id'], 'type' => true])->get();

//        echo '<option value="-1"> Select Teacher</option>';
        foreach($teachers as $teacher){
            echo '<option value="'.$teacher->id.'">'.$teacher->name.'</option>';
        }

        exit;

        }

    /**
     * Show the form for editing the specified Teacher.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teacher = $this->teacherRepository->findWithoutFail($id);

        if (empty($teacher)) {
            Flash::error('Teacher not found');

            return redirect(route('admin.teachers.index'));
        }

        return view('admin.teachers.edit')->with('teacher', $teacher);
    }

    /**
     * Update the specified Teacher in storage.
     *
     * @param  int              $id
     * @param UpdateTeacherRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $name = $request->get('name');
        if ($name == "") {
            $request->session()->flash('name', 'Error: name is required');
            return redirect()->back()->withInput();
        }
        $fathername = $request->get('fathername');
        if ($fathername == "") {
            $request->session()->flash('fathername', 'Error: father name is required');
            return redirect()->back()->withInput();
        }
        $contact1 = $request->get('contact1');
        if ($contact1 == "") {
            $request->session()->flash('contact1', 'Error: contact1 is required');
            return redirect()->back()->withInput();
        }
        $contact2 = $request->get('contact2');
        if ($contact2 == "") {
            $request->session()->flash('contact2', 'Error: contact2 is required');
            return redirect()->back()->withInput();
        }
        $email = $request->get('email');
        if ($email == "") {
            $request->session()->flash('email', 'Error: email is required');
            return redirect()->back()->withInput();
        }
        $qualificatioon = $request->get('qualificatioon');
        if ($qualificatioon == "") {
            $request->session()->flash('qualificatioon', 'Error: qualification is required');
            return redirect()->back()->withInput();
        }

        $course_to_teach_id = $request->get('course_to_teach_id');
        if ($course_to_teach_id == "") {
            $request->session()->flash('course_to_teach_id', 'Error: course to teach is required');
            return redirect()->back()->withInput();
        }
        $experience = $request->get('experience');
        if ($experience == "") {
            $request->session()->flash('experience', 'Error: experience is required');
            return redirect()->back()->withInput();
        }
//        $username = $request->get('username');
//        if ($username == "") {
//            $request->session()->flash('username', 'Error: username is required');
//            return redirect()->back()->withInput();
//        }
        $password = $request->get('password');
        if ($password == "") {
            $request->session()->flash('password', 'Error: password is required');
            return redirect()->back()->withInput();
        }
//        $teacher_code = $request->get('teacher_code');
        $country = $request->get('country');
        if ($country == "") {
            $request->session()->flash('country', 'Error: country is required');
            return redirect()->back()->withInput();
        }
        $city = $request->get('city');
        if ($city == "") {
            $request->session()->flash('city', 'Error: city is required');
            return redirect()->back()->withInput();
        }
        $cnic = $request->get('cnic');
        if ($cnic == "") {
            $request->session()->flash('cnic', 'Error: cnic is required');
            return redirect()->back()->withInput();
        }
        $status = $request->get('status');
        if ($status == "") {
            $request->session()->flash('status', 'Error: status is required');
            return redirect()->back()->withInput();
        }
        $course_to_teach_id = $request->get('course_to_teach_id');

        $payment_plan_id = $request->get('payment_plan_id');
        if ($payment_plan_id == "") {
            $request->session()->flash('payment_plan_id', 'Error: payment plan is required');
            return redirect()->back()->withInput();
        }


        $teacher = Teacher::find($id);

        if (empty($teacher)) {
            Flash::error('Teacher not found');

            return redirect(route('admin.teachers.index'));
        }


        $teacher->name = $name;
        $teacher->fathername = $fathername;
        $teacher->contact1 = $contact1;
        $teacher->contact2 = $contact2;
        $teacher->email = $email;
        $teacher->qualificatioon = $qualificatioon;
//        $teacher->username = $username;
        $teacher->password = \Hash::make($password);;
        $teacher->password2 = $password;
        $teacher->course_to_teach_id = $course_to_teach_id;
        $teacher->payment_plan_id = $payment_plan_id;
//        try{
//            $teachers = Teacher::all();
//            $temp_teacher_code =$teachers->last();
//            $teacher->teacher_code = intval($temp_teacher_code->id) +1;
//        }catch (\Exception $e){
//            $teacher->teacher_code = 1;
//        }

        $teacher->country = $country;
        $teacher->city = $city;
        $teacher->cnic = $cnic;
        $teacher->status = $status;

        $file = $request->file('profile_pic');

        if ($file != null && $request->file('profile_pic')) {
            $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
            $file->move('teachers', $fileName);
            $teacher->profile_pic = $fileName;
            $teacher->save();

        }

        $teacher->save();

        Flash::success('Teacher updated successfully.');

        return redirect(route('admin.teachers.index'));
    }

    /**
     * Remove the specified Teacher from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teacher = $this->teacherRepository->findWithoutFail($id);

        if (empty($teacher)) {
            Flash::error('Teacher not found');

            return redirect(route('admin.teachers.index'));
        }

        $this->teacherRepository->delete($id);

        Flash::success('Teacher deleted successfully.');

        return redirect(route('admin.teachers.index'));
    }
}
