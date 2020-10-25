<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Access\User\User;
use App\Models\Admin\Author;
use App\Models\Admin\Book;
use App\Models\Admin\BookType;
use App\Models\Admin\Brand;
use App\Models\Admin\Car;
use App\Models\Admin\CarDoor;
use App\Models\Admin\Category;
use App\Models\Admin\Chapter;
use App\Models\Admin\Contact;
use App\Models\Admin\Employee;
use App\Models\Admin\Gallery;
use App\Models\Admin\HomeGallery;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Admin\Student;
use App\Models\Admin\StudentCourse;
use App\Models\Admin\SubCategory;
use App\Models\Admin\Subject;
use App\Models\Admin\Teacher;
use App\Models\Admin\TeacherCourse;
use App\Models\Admin\TeacherStudent;
use App\Models\Admin\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Admin\CourseToTeach;
use Flash;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */

    /**
     * @teacher teacher frontend functions
     *
     */

    public function get_teacher_profile_step1()
    {
        if(\Session::get('teacher_id') != null){
            return redirect(route('teaching.account.dashboard'));
        }

        return view('frontend.site.teacher.become-teacher-step1');
    }
    public function post_teacher_profile_step1(Request $request)
    {
//        dd($request->all());
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
        if ($course_to_teach_id == -1) {
            $request->session()->flash('course_to_teach_id', 'Error: course to teach is required');
            return redirect()->back()->withInput();
        }
        $experience = $request->get('experience');
        if ($experience == "") {
            $request->session()->flash('experience', 'Error: experience is required');
            return redirect()->back()->withInput();
        }
        $username = $request->get('username');
        if ($username == "") {
            $request->session()->flash('username', 'Error: username is required');
            return redirect()->back()->withInput();
        }
        $password = $request->get('password');
        if ($password == "") {
            $request->session()->flash('password', 'Error: password is required');
            return redirect()->back()->withInput();
        }
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
//        $cnic = $request->get('cnic');
//        if ($cnic == "") {
//            $request->session()->flash('cnic', 'Error: cnic is required');
//            return redirect()->back()->withInput();
//        }
//        $status = $request->get('status');
//        if ($status == "") {
//            $request->session()->flash('status', 'Error: status is required');
//            return redirect()->back()->withInput();
//        }

        $teacher = new Teacher();

        $teacher->name = $name;
        $teacher->fathername = $fathername;
        $teacher->contact1 = $contact1;
        $teacher->contact2 = $contact2;
        $teacher->email = $email;
        $teacher->qualificatioon = $qualificatioon;
        $teacher->experience = $experience;
        $teacher->course_to_teach_id = $course_to_teach_id;
        $teacher->username = $username;
        $teacher->password2 = $password;
        $teacher->password = \Hash::make($password);
        $teacher->type = 1;
        try{
            $teachers = Teacher::all();
            $temp_teacher_code =$teachers->last();
            $teacher->teacher_code = intval($temp_teacher_code->id) +1;
        }catch (\Exception $e){
            $teacher->teacher_code = 1;
        }

        $teacher->country = $country;
        $teacher->city = $city;
        $teacher->profile_pic = "image_200_200.png";
        $teacher->cnic = "0000-000000-0000";
        $teacher->status = "inactive";

        $teacher->save();

        \Session::flash('success_flash_message','you have successfully submitted your request.');

        return redirect(route('become.teacher.step2', ['id' => $teacher->id]));
    }

    public function get_teacher_profile_step2($id)
    {
        $teacher = Teacher::find($id);

//        dd($teacher);

        if (empty($teacher)) {
            Flash::error('Teacher not found');

            \Session::flash('not_found_flash_message','Teacher is not exist.');

        }
        return view('frontend.site.teacher.become-teacher-step2', compact('teacher'));
    }

    public function post_teacher_profile_step2(Request $request)
    {
        $id = $request->get('teacher_id');
        $teacher = Teacher::find($id);
        if (empty($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $cnic = $request->get('cnic');
        if ($cnic == "") {
            $request->session()->flash('cnic', 'Error: cnic is required');
            return redirect()->back()->withInput();
        }
        $payment_plan_id = $request->get('payment_plan_id');
        if ($payment_plan_id == null) {
            $request->session()->flash('payment_plan_id', 'Error: payment plan is required');
            return redirect()->back()->withInput();
        }

        $file = $request->file('profile_pic');
        if ($file == null) {
            $request->session()->flash('profile_pic', 'Error: profile image is required');
            return redirect()->back()->withInput();
        }
        if ($file != null && $request->file('profile_pic')) {
            $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
            $file->move('teachers', $fileName);
            $teacher->profile_pic = $fileName;
            $teacher->cnic = $cnic;
            $teacher->payment_plan_id = $payment_plan_id;
            $teacher->save();

        }

        return redirect(route('become.teacher.step3', ['id' => $teacher->id]));
//        return view('frontend.site.teacher.become-teacher-step3', compact($teacher));

    }

    public function get_teacher_profile_step3($id)
    {
        $teacher = Teacher::find($id);
        if (empty($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }
        return view('frontend.site.teacher.become-teacher-step3', compact('teacher'));
    }

    public function get_teacher_login()
    {
        if(\Session::get('teacher_id') != null){
            return redirect(route('teaching.account.dashboard'));
        }

        return view('frontend.site.teacher.teacher-login');
    }
    public function post_teacher_login(Request $request)
    {
        if(\Session::get('teacher_id') != null){
            return redirect(route('teaching.account.dashboard'));
        }

        $username = $request->get('username');
        if ($username == "") {
            $request->session()->flash('username', 'Error: username is required');
            return redirect()->back()->withInput();
        }
        $password = $request->get('password');
        if ($password == "") {
            $request->session()->flash('password', 'Error: password is required');
            return redirect()->back()->withInput();
        }

        $teacher = Teacher::where(['username'=>$username, 'password2'=>$password, 'status'=>'active'])->first();

        if (!isset($teacher) || $teacher->status == 'inactive') {
        \Session::flash('not_found_inactive_flash_message','Teacher account is not active yet please pay the selected amount and give confirmation at Whatsapp no: +92 333 1458883.');
        return redirect(route('get.teacher.login'));
        }

        if (isset($teacher)) {

         \Session::put('teacher_id', $teacher->id);
         \Session::put('teacher_name', $teacher->name);
         return redirect(route('teaching.account.dashboard'));
        }

        return redirect(route('get.teacher.login'));
    }

    public function teaching_account_dashboard()
    {
        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        return view('frontend.site.teacher.teaching-account-dashboard', compact('teacher'));
    }

    public function teacher_logout(){
        \Session::flush();
        \Session::forget('teacher_id');
        \Session::forget('teacher_name');

        return redirect(route('get.teacher.login'));
    }


    public function get_account_teacher_profile()
    {
        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        return view('frontend.site.teacher.account-teacher-profile', compact('teacher'));
    }

    public function post_account_teacher_profile(Request $request)
    {
        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

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
        $subject_to_teach = $request->get('subject_to_teach');
        if ($subject_to_teach == "") {
            $request->session()->flash('subject_to_teach', 'Error: subject to teach is required');
            return redirect()->back()->withInput();
        }
        $experience = $request->get('experience');
        if ($experience == "") {
            $request->session()->flash('experience', 'Error: experience is required');
            return redirect()->back()->withInput();
        }

        $password = $request->get('password');
        if ($password == "") {
            $request->session()->flash('password', 'Error: password is required');
            return redirect()->back()->withInput();
        }
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

        $payment_plan_id = $request->get('payment_plan_id');
        if ($payment_plan_id == null) {
            $request->session()->flash('payment_plan_id', 'Error: payment plan is required');
            return redirect()->back()->withInput();
        }

        $file = $request->file('profile_pic');

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        $teacher->name = $name;
        $teacher->fathername = $fathername;
        $teacher->contact1 = $contact1;
        $teacher->contact2 = $contact2;
        $teacher->email = $email;
        $teacher->qualificatioon = $qualificatioon;
        $teacher->experience = $experience;
        $teacher->subject_to_teach = $subject_to_teach;
        $teacher->password2 = $password;
        $teacher->password = \Hash::make($password);;
        $teacher->country = $country;
        $teacher->city = $city;
        $teacher->cnic = $cnic;
        $teacher->save();

        if ($file != null && $request->file('profile_pic')) {
            $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
            $file->move('teachers', $fileName);
            $teacher->profile_pic = $fileName;
            $teacher->save();
        }

        if($payment_plan_id != $teacher->payment_plan_id){
            $teacher->payment_plan_id = $payment_plan_id;
            $teacher->status = "inactive";
            $teacher->save();
            \Session::flush();
            \Session::flash('inactive_account_flash_message','Because you have changed payment plan and your account is inactive, please pay the selected payment plan then login again');
            return redirect(route('get.teacher.login'));
        }

        \Session::flash('success_flash_message','you have successfully updated your profile.');
        return redirect(route('get.account.teacher.profile'));
    }

    public function get_design_course_step1(){
        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }
        return view('frontend.site.teacher.design-course-step1', compact('teacher'));
    }

    public function post_design_course_step1(Request $request){

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $teacher_id = \Session::get('teacher_id');

        $teacher = Teacher::find($teacher_id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $subject_type_id = $request->get('subject_type_id');
        if ($subject_type_id == "") {
            $request->session()->flash('subject_type_id', 'Error: subject type is required');
            return redirect()->back()->withInput();
        }

        $class_id = $request->get('class_id');
        if ($class_id == "") {
            $request->session()->flash('class_id', 'Error: class is required');
            return redirect()->back()->withInput();
        }

        $title = $request->get('title');
        if ($title == "") {
            $request->session()->flash('title', 'Error: title is required');
            return redirect()->back()->withInput();
        }

        $short_details = $request->get('short_details');
        if ($short_details == "") {
            $request->session()->flash('short_details', 'Error: short details is required');
            return redirect()->back()->withInput();
        }

        $price = $request->get('price');
        if ($price == "") {
            $request->session()->flash('price', 'Error: price is required');
            return redirect()->back()->withInput();
        }

        $status = $request->get('status');
        if ($status == "") {
            $request->session()->flash('status', 'Error: status is required');
            return redirect()->back()->withInput();
        }


        $promo_video = $request->get('promo_video');
        if ($promo_video == "") {
            $request->session()->flash('promo_video', 'Error: promo video url is required');
            return redirect()->back()->withInput();
        }

        $is_featured = $request->get('is_featured');
        $details = $request->get('details');
        $image = $request->file('image');
        $promo_video_featured_image = $request->file('promo_video_featured_image');

        $course = new Subject();

        $course->title = $title;
        $course->short_details = $short_details;
        $course->details = $details;
        $course->price = $price;
        $course->status = $status;
        $course->promo_video = $promo_video;
        $course->subject_type_id = $subject_type_id;
        $course->class_id = $class_id;

        if ($is_featured == true){
            $course->is_featured = 1;
            $course->save();
        }else{
            $course->is_featured = 0;
            $course->save();
        }

        try{
            $courses = Subject::all();
            $temp_subject_code =$courses->last();
            $course->code = intval($temp_subject_code->id) +1;
            $course->save();

        }catch (\Exception $e){
            $course->code = 1;
            $course->save();
        }

        if (($image != null && $request->file('image')
            && $promo_video_featured_image != null && $request->file('promo_video_featured_image'))) {

            $fileName = str_random() . time() . '.' . $image->getClientOriginalExtension();
            $image->move('subjects', $fileName);
            $course->image = $fileName;

            $fileName1 = str_random() . time() . '.' . $promo_video_featured_image->getClientOriginalExtension();
            $promo_video_featured_image->move('subjects', $fileName1);
            $course->promo_video_featured_image = $fileName1;

            $course->save();

        }else{
            $course->image = 'image_320_240.jpg';
            $course->promo_video_featured_image = 'image_320_240.jpg';
            $course->save();
        }

        $course->save();

        $teacher_course = new TeacherCourse();
        $teacher_course->teacher_id = $teacher->id;
        $teacher_course->course_id = $course->id;
        $teacher_course->save();
    
        \Session::flash('course_design__step1_success_flash_message','you have successfully designed your course.');
        return redirect(route('teaching.account.dashboard'));
    }

    public function get_design_course_step1_edit($course_id){

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $course = Subject::find($course_id);

        if (!isset($course)) {
            \Session::flash('course_not_found_flash_message','Course is not exist.');
        }



        return view('frontend.site.teacher.edit-design-course-step1', compact('teacher', 'course'));
    }

    public function post_design_course_step1_edit($course_id, Request $request){

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $course = Subject::find($course_id);

        if (!isset($course)) {
            \Session::flash('course_not_found_flash_message','Course is not exist.');
        }


        $subject_type_id = $request->get('subject_type_id');
        if ($subject_type_id == "") {
            $request->session()->flash('subject_type_id', 'Error: subject type is required');
            return redirect()->back()->withInput();
        }

        $class_id = $request->get('class_id');
        if ($class_id == "") {
            $request->session()->flash('class_id', 'Error: class is required');
            return redirect()->back()->withInput();
        }

        $title = $request->get('title');
        if ($title == "") {
            $request->session()->flash('title', 'Error: title is required');
            return redirect()->back()->withInput();
        }

        $short_details = $request->get('short_details');
        if ($short_details == "") {
            $request->session()->flash('short_details', 'Error: short details is required');
            return redirect()->back()->withInput();
        }

        $price = $request->get('price');
        if ($price == "") {
            $request->session()->flash('price', 'Error: price is required');
            return redirect()->back()->withInput();
        }

        $status = $request->get('status');
        if ($status == "") {
            $request->session()->flash('status', 'Error: status is required');
            return redirect()->back()->withInput();
        }


        $promo_video = $request->get('promo_video');
        if ($promo_video == "") {
            $request->session()->flash('promo_video', 'Error: promo video url is required');
            return redirect()->back()->withInput();
        }

        $is_featured = $request->get('is_featured');
        $details = $request->get('details');
        $image = $request->file('image');
        $promo_video_featured_image = $request->file('promo_video_featured_image');


        $course->title = $title;
        $course->short_details = $short_details;
        $course->details = $details;
        $course->price = $price;
        $course->status = $status;
        $course->promo_video = $promo_video;
        $course->subject_type_id = $subject_type_id;
        $course->class_id = $class_id;

        if ($is_featured == true){
            $course->is_featured = 1;
            $course->save();
        }else{
            $course->is_featured = 0;
            $course->save();
        }

        if ($image != null && $request->hasFile('image')) {

            $fileName = str_random() . time() . '.' . $image->getClientOriginalExtension();
            $image->move('subjects', $fileName);
            $course->image = $fileName;

            $course->save();
        }
        else if ($promo_video_featured_image != null && $request->hasFile('promo_video_featured_image')) {

                $fileName1 = str_random() . time() . '.' . $promo_video_featured_image->getClientOriginalExtension();
                $promo_video_featured_image->move('subjects', $fileName1);
                $course->promo_video_featured_image = $fileName1;

                $course->save();

        }else{
            $course->image = $course->image;
            $course->promo_video_featured_image = $course->promo_video_featured_image;
            $course->save();
        }

        $course->save();

        \Session::flash('course_design__step1_success_flash_message','you have successfully updated your course.');
        return redirect(route('get.design.course.step1.edit', ['id' => $course->id]));
    }

    /**
     * @student student frontend functions
     *
     */

    public function teacher_students()
    {

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
            return redirect(route('get.teacher.login'));
        }

        $teacher_students = TeacherStudent::where('teacher_id', $teacher->id)->get();


        return view('frontend.site.student.account.students', compact('teacher_students', 'teacher'));
    }
    public function get_student_register()
    {
        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
            return redirect(route('get.teacher.login'));
        }


        return view('frontend.site.student.account.register', compact('teacher'));
    }
    public function post_student_register(Request $request)
    {
//        dd($request->all());

        $id = $request->get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
            return redirect(route('get.teacher.login'));
        }

        $class_id = $request->get('class_id');
        if ($class_id == "") {
            $request->session()->flash('class_id', 'Error: class is required');
            return redirect()->back()->withInput();
        }
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
        $phone = $request->get('phone');
        if ($phone == "") {
            $request->session()->flash('phone', 'Error: phone is required');
            return redirect()->back()->withInput();
        }

        $email = $request->get('email');
        if ($email == "") {
            $request->session()->flash('email', 'Error: email is required');
            return redirect()->back()->withInput();
        }
        $password = $request->get('password');
        if ($password == "") {
            $request->session()->flash('password', 'Error: password is required');
            return redirect()->back()->withInput();
        }
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

        $file = $request->file('profile_pic');
//        if ($file == null) {
//            $request->session()->flash('profile_pic', 'Error: profile picture is required');
//            return redirect()->back()->withInput();
//        }

        $gender = $request->get('gender');
        if ($gender == "") {
            $request->session()->flash('gender', 'Error: gender is required');
            return redirect()->back()->withInput();
        }


        $student = new Student();

        $student->class_id = $class_id;
        $student->name = $name;
        $student->father_name = $fathername;
        $student->phone = $phone;
        $student->email = $email;
        $student->password2 = $password;
        $student->password = \Hash::make($password);;

        try{
            $students = Student::all();
            $temp_student_code =$students->last();
            $student->code = intval($temp_student_code->id) +1;
        }catch (\Exception $e){
            $student->code = 1;
        }

        $student->country = $country;
        $student->city = $city;
        $student->type = "teacher";
        $student->gender = $gender;

        if ($request->hasFile('profile_pic')) {
            $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
            $file->move('students', $fileName);
            $student->profile_pic = $fileName;
            $student->save();
        }else{
            $student->profile_pic = "image_200_200.png";
        }

        $student->status = "inactive";

        $student->save();

        $teacher_student = new TeacherStudent();
        $teacher_student->teacher_id = $teacher->id;
        $teacher_student->student_id = $student->id;
        $teacher_student->save();

        \Session::flash('success_flash_message','you have successfully saved your student.');

        return redirect(route('teacher.students'));
    }
    public function teacher_student_show($student_id)
    {
        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
            return redirect(route('get.teacher.login'));
        }

        $student = Student::find($student_id);

        if (!isset($student)) {
            \Session::flash('student_not_found_flash_message','Student is not exist.');
            return redirect(route('teacher.students'));
        }

        return view('frontend.site.student.account.student-show', compact('teacher', 'student'));
    }
    public function teacher_student_edit($student_id)
    {
        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
            return redirect(route('get.teacher.login'));
        }

        $student = Student::find($student_id);

        if (!isset($student)) {
            \Session::flash('student_not_found_flash_message','Student is not exist.');
            return redirect(route('teacher.students'));
        }

        return view('frontend.site.student.account.student-edit', compact('teacher', 'student'));
    }
    public function teacher_student_update(Request $request)
    {
//        dd($request->all());

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
            return redirect(route('get.teacher.login'));
        }

        $student_id = $request->get('student_id');
        $student = Student::find($student_id);

        if (!isset($student)) {
            \Session::flash('student_not_found_flash_message','Student is not exist.');
            return redirect(route('teacher.students'));
        }

        $class_id = $request->get('class_id');
        if ($class_id == "") {
            $request->session()->flash('class_id', 'Error: class is required');
            return redirect()->back()->withInput();
        }
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
        $phone = $request->get('phone');
        if ($phone == "") {
            $request->session()->flash('phone', 'Error: phone is required');
            return redirect()->back()->withInput();
        }

        $email = $request->get('email');
        if ($email == "") {
            $request->session()->flash('email', 'Error: email is required');
            return redirect()->back()->withInput();
        }
        $password = $request->get('password');
        if ($password == "") {
            $request->session()->flash('password', 'Error: password is required');
            return redirect()->back()->withInput();
        }
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

        $file = $request->file('profile_pic');
//        if ($file == null) {
//            $request->session()->flash('profile_pic', 'Error: profile picture is required');
//            return redirect()->back()->withInput();
//        }

        $gender = $request->get('gender');
        if ($gender == "") {
            $request->session()->flash('gender', 'Error: gender is required');
            return redirect()->back()->withInput();
        }

        $student->class_id = $class_id;
        $student->name = $name;
        $student->father_name = $fathername;
        $student->phone = $phone;
        $student->email = $email;
        $student->password2 = $password;
        $student->password = \Hash::make($password);;
        $student->country = $country;
        $student->city = $city;
        $student->gender = $gender;

        if ($request->hasFile('profile_pic')) {
            $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
            $file->move('students', $fileName);
            $student->profile_pic = $fileName;
            $student->save();
        }

        $student->save();

        \Session::flash('success_flash_message','you have successfully updated your student.');

        return redirect(route('teacher.students'));
    }

    /**
     * Teacher student course registration
     */

    public function teacher_student_course_registration($student_id)
    {
        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
            return redirect(route('get.teacher.login'));
        }

        $student = Student::find($student_id);

        if (!isset($student)) {
            \Session::flash('student_not_found_flash_message','Student is not exist.');
            return redirect(route('teacher.students'));
        }
        
        $teacher_courses = TeacherCourse::where('teacher_id', $teacher->id)->get();


        return view('frontend.site.student.account.student-course-reg', compact('teacher','student', 'teacher_courses'));
    }

    public function teacher_student_course_registration_post(Request $request)
    {

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
            return redirect(route('get.teacher.login'));
        }

        $student_id = $request->get('student_id');
        $student = Student::find($student_id);

        if (!isset($student)) {
            \Session::flash('student_not_found_flash_message','Student is not exist.');
            return redirect(route('teacher.students'));
        }


        $course_id = $request->get('course_id');
        $course = Subject::find($course_id);
        if (empty($course)) {
            \Session::flash('student_not_found_flash_message','Course is not exist.');
            return redirect(route('teacher.students'));
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

        return redirect(route('teacher.student.course.details', [$student->id, $course->id]));
    }

    public function teacher_student_course_details($student_id, $course_id)
    {

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
            return redirect(route('get.teacher.login'));
        }

        $student = Student::find($student_id);
        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('teacher.students'));
        }

        $course = Subject::find($course_id);
        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('teacher.students'));
        }


        return view('frontend.site.student.account.student-course-details', compact('teacher','student', 'course'));
    }


    public function teacher_student_registered_courses($student_id)
    {
        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
            return redirect(route('get.teacher.login'));
        }

        $student = Student::find($student_id);
        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('teacher.students'));
        }

        $student_courses = StudentCourse::where('student_id', $student_id)->get();


        return view('frontend.site.student.account.teacher-student-registered-courses', compact('teacher','student', 'student_courses'));
    }




    /**
     * @student student frontend functions
     *
     */

    public function get_student_registration_step1()
    {
        if(\Session::get('student_id') != null){
            return redirect(route('student.dashboard'));
        }

        return view('frontend.site.student.student-registration-step-1');
    }
    public function post_student_registration_step1(Request $request)
    {
        if(\Session::get('student_id') != null){
            return redirect(route('student.dashboard'));
        }

        $class_id = $request->get('class_id');
        if ($class_id == -1) {
            $request->session()->flash('class_id', 'Error: class is required');
            return redirect()->back()->withInput();
        }
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
        $phone = $request->get('phone');
        if ($phone == "") {
            $request->session()->flash('phone', 'Error: phone is required');
            return redirect()->back()->withInput();
        }

        $email = $request->get('email');
        if ($email == "") {
            $request->session()->flash('email', 'Error: email is required');
            return redirect()->back()->withInput();
        }
        $password = $request->get('password');
        if ($password == "") {
            $request->session()->flash('password', 'Error: password is required');
            return redirect()->back()->withInput();
        }
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

        $file = $request->file('profile_pic');
//        if ($file == null) {
//            $request->session()->flash('profile_pic', 'Error: profile picture is required');
//            return redirect()->back()->withInput();
//        }

        $gender = $request->get('gender');
        if ($gender == "") {
            $request->session()->flash('gender', 'Error: gender is required');
            return redirect()->back()->withInput();
        }


        $student = new Student();

        $student->class_id = $class_id;
        $student->name = $name;
        $student->father_name = $fathername;
        $student->phone = $phone;
        $student->email = $email;
        $student->password2 = $password;
        $student->password = \Hash::make($password);;

        try{
            $students = Student::all();
            $temp_student_code =$students->last();
            $student->code = intval($temp_student_code->id) +1;
        }catch (\Exception $e){
            $student->code = 1;
        }

        $student->country = $country;
        $student->city = $city;
        $student->type = "direct";
        $student->gender = $gender;

        if ($request->hasFile('profile_pic')) {
            $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
            $file->move('students', $fileName);
            $student->profile_pic = $fileName;
            $student->save();
        }else{
            $student->profile_pic = "image_200_200.png";
        }

        $student->status = "active";
        $student->save();

        \Session::flash('success_flash_message','you have successfully become our student.');

        return redirect(route('get.student.registration.step2', [$student->id]));
    }
    public function get_student_registration_step2($student_id)
    {
        $student = Student::find($student_id);

        if (empty($student)) {
            Flash::error('Student not found');
            return redirect(route('get.student.registration.step1'));
        }

        $course_types = CourseToTeach::all();

        return view('frontend.site.student.student-registration-step-2', compact('student', 'course_types'));
    }
    public function get_student_registration_step3($course_type_id, $student_id)
    {
        $student = Student::find($student_id);

        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('get.student.registration.step1'));
        }

        $course_type = CourseToTeach::find($course_type_id);
        if (empty($course_type)) {
            Flash::error('course type not found');

            return redirect(route('become.student'));
        }

        $teachers = Teacher::
            where(['course_to_teach_id'=> $course_type->id, 'status' => 'active'])->get();

        return view('frontend.site.student.student-registration-step-3',
                compact('teachers', 'course_type', 'student'));

    }
    public function get_student_registration_step4($course_type_id, $teacher_id,$student_id)
    {
        $student = Student::find($student_id);
        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('get.student.registration.step1'));
        }

        $course_type = CourseToTeach::find($course_type_id);
        if (empty($course_type)) {
            Flash::error('course type not found');

            return redirect(route('get.student.registration.step1'));
        }


        $teacher = Teacher::find($teacher_id);

        $teacher_courses = TeacherCourse::all();

        foreach ($teacher_courses as $teacher_course){
            if ($teacher->id == $teacher_course->teacher_id){
                $course = Subject::where(['id' => $teacher_course->course_id, 'class_id' => $student->class_id, 'status' => 'active'])->first();
                dd($course);

                return view('frontend.site.student.student-registeration-step-4',
                    compact('student', 'teacher', 'course_type', 'course'));
            }

        }

        $student->delete();
        $student->save();
        return redirect(route('get.student.registration.step1'));
    }
    public function post_student_registration_step4(Request $request)
    {
        $student_id = $request->get('student_id');
        $student = Student::find($student_id);

//        $course_type_id = $request->get('course_type_id');
//        $course_type = CourseToTeach::find($course_type_id);

        $course_id = $request->get('course_id');
        $course = Subject::find($course_id);


        $teacher_id = $request->get('teacher_id');
        $teacher = Teacher::find($teacher_id);

        // save student course
        $student_course = new StudentCourse();
        $student_course->student_id = $student->id;
        $student_course->subject_id = $course->id;
        $student_course->status = 'inactive';
        $student_course->save();

        // save teacher student
        $teacher_student = new TeacherStudent();
        $teacher_student->student_id = $student->id;
        $teacher_student->teacher_id = $teacher->id;
        $teacher_student->save();

        return redirect(route('get.student.login'));
    }

    public function student_course_details($teacher_id, $student_id, $course_id)
    {

        $student = Student::find($student_id);
        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('become.student'));
        }

        $course = Subject::find($course_id);
        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('become.student'));
        }


        $teacher = Teacher::find($teacher_id);
        if (empty($teacher)) {
            Flash::error('Teacher Course not found');

            return redirect(route('become.student'));
        }

        return view('frontend.site.student.student-course-registration-details', compact('teacher','student', 'course'));
    }


    public function get_student_login()
    {
        if(\Session::get('student_id') != null){
            return redirect(route('student.dashboard'));
        }

        return view('frontend.site.student.student-login');
    }
    public function post_student_login(Request $request)
    {
        if(\Session::get('student_id') != null){
            return redirect(route('student.dashboard'));
        }

        $phone = $request->get('phone');
        if ($phone == "") {
            $request->session()->flash('phone', 'Error: phone is required');
            return redirect()->back()->withInput();
        }
        $password = $request->get('password');
        if ($password == "") {
            $request->session()->flash('password', 'Error: password is required');
            return redirect()->back()->withInput();
        }

        $student = Student::where(['phone'=>$phone, 'password2'=>$password])->first();

        if (!isset($student)) {
            \Session::flash('not_found_inactive_flash_message','Student account is not active yet please pay the selected amount and give confirmation at Whatsapp no: +92 333 1458883.');
            return redirect(route('get.student.login'));
        }

        if (isset($student)) {

            \Session::put('student_id', $student->id);
            \Session::put('student_name', $student->name);
            return redirect(route('student.dashboard'));
        }

        return redirect(route('get.student.login'));
    }

    public function student_dashboard()
    {
        if(\Session::get('student_id') == null){
            return redirect(route('get.student.login'));
        }

        $id = \Session::get('student_id');

        $student = Student::find($id);

        if (!isset($student)) {
            \Session::flash('not_found_flash_message','Student is not exist.');
            return redirect(route('get.student.login'));
        }

        return view('frontend.site.student.dashboard', compact('student'));
    }

    /**
     * @chapters
     */

    public function get_student_course_chapters($course_id){

        if(\Session::get('student_id') == null){
            return redirect(route('get.student.login'));
        }

        $id = \Session::get('student_id');

        $student = Student::find($id);

        if (!isset($student)) {
            \Session::flash('not_found_flash_message','Student is not exist.');
            return redirect(route('get.student.login'));
        }

        $course = Subject::find($course_id);

        $chapters = Chapter::where('subject_id', $course_id)->get();

        return view('frontend.site.student.course.chapter.chapters', compact('student', 'chapters', 'course'));
    }

    /**
     * @topic
     */

    public function get_student_course_chapter_topics($chapter_id){

        if(\Session::get('student_id') == null){
            return redirect(route('get.student.login'));
        }

        $id = \Session::get('student_id');

        $student = Student::find($id);

        if (!isset($student)) {
            \Session::flash('not_found_flash_message','Student is not exist.');
            return redirect(route('get.student.login'));
        }

        $chapter = Chapter::find($chapter_id);

        $topics = Topic::where(['subject_id'=> $chapter->subject_id, 'chapter_id'=> $chapter->id])->get();

        return view('frontend.site.student.course.chapter.topic.topics', compact('student', 'chapter', 'topics'));
    }
    public function get_student_course_chapter_topic_show($topic_id){

        if(\Session::get('student_id') == null){
            return redirect(route('get.student.login'));
        }

        $id = \Session::get('student_id');

        $student = Student::find($id);

        if (!isset($student)) {
            \Session::flash('not_found_flash_message','Student is not exist.');
            return redirect(route('get.student.login'));
        }

        $topic = Topic::find($topic_id);

        $chapter = Chapter::find($topic->chapter_id);

        $course = Subject::find($topic->subject_id);

        return view('frontend.site.student.course.chapter.topic.show', compact('student', 'topic','chapter', 'course'));
    }


    public function student_logout(){
        \Session::flush();
        \Session::forget('student_id');
        \Session::forget('student_name');

        return redirect(route('get.student.login'));
    }


    public function get_student_profile_edit()
    {
        if(\Session::get('student_id') == null){
            return redirect(route('get.student.login'));
        }

        $id = \Session::get('student_id');

        $student = Student::find($id);

        if (!isset($student)) {
            \Session::flash('not_found_flash_message','Student is not exist.');
            return redirect(route('get.student.login'));
        }

        return view('frontend.site.student.student-profile-edit', compact('student'));
    }

    public function post_student_profile_edit(Request $request)
    {
        if(\Session::get('student_id') == null){
            return redirect(route('get.student.login'));
        }


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

        $email = $request->get('email');
        if ($email == "") {
            $request->session()->flash('email', 'Error: email is required');
            return redirect()->back()->withInput();
        }
        $password = $request->get('password');
        if ($password == "") {
            $request->session()->flash('password', 'Error: password is required');
            return redirect()->back()->withInput();
        }
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

        $file = $request->file('profile_pic');

        $gender = $request->get('gender');
        if ($gender == "") {
            $request->session()->flash('gender', 'Error: gender is required');
            return redirect()->back()->withInput();
        }

        $id = \Session::get('student_id');

        $student = Student::find($id);

        if (!isset($student)) {
            \Session::flash('not_found_flash_message','Student is not exist.');
            return redirect(route('get.student.login'));
        }

        $student->name = $name;
        $student->father_name = $fathername;
        $student->email = $email;
        $student->country = $country;
        $student->city = $city;
        $student->gender = $gender;

        if ($file != null && $request->file('profile_pic')) {
            $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
            $file->move('students', $fileName);
            $student->profile_pic = $fileName;
            $student->save();
        }

        if($password != $student->password2){
            $student->password2 = $password;
            $student->password = \Hash::make($password);
            $student->save();
            \Session::flush();
            \Session::flash('student_password_change_flash_message','you have changed your password, please login again');
            return redirect(route('get.student.login'));
        }

        $student->password2 = $password;
        $student->password = \Hash::make($password);
        $student->save();

        \Session::flash('success_flash_message','you have successfully updated your profile.');
        return redirect(route('get.student.profile.edit'));
    }

    public function get_login_student_course_register($student_id)
    {
        if(\Session::get('student_id') == null){
            return redirect(route('get.student.login'));
        }

        $student = Student::find($student_id);

        if (empty($student)) {
            Flash::error('Student not found');
            return redirect(route('get.student.login'));
        }
        
        $courses = Subject::
         where(['class_id' => $student->class_id, 'status' => 'active'])->get();
     

        return view('frontend.site.student.course.student-course-register', compact('student', 'courses'));
    }
    public function post_login_student_course_register(Request $request)
    {
        if(\Session::get('student_id') == null){
            return redirect(route('get.student.login'));
        }

        $student_id = $request->get('student_id');
        $student = Student::find($student_id);
        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('become.student'));
        }

        $course_id = $request->get('course_id');
        $course = Subject::find($course_id);
        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('become.student'));
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

        $teacher_student = new TeacherStudent();
        $teacher_student->student_id = $student->id;
        $teacher_student->teacher_id = $teacher->id;
        $teacher_student->save();


        $teacher_id = $teacher->id;
        $student_id = $student->id;
        $course_id = $course->id;

        return redirect(route('get.login.student.course.show', [$teacher_id, $student_id, $course_id]));
    }

    public function get_login_student_course_show($teacher_id, $student_id, $course_id)
    {
        if(\Session::get('student_id') == null){
            return redirect(route('get.student.login'));
        }

        $student = Student::find($student_id);
        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('become.student'));
        }

        $course = Subject::find($course_id);
        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('become.student'));
        }


        $teacher = Teacher::find($teacher_id);
        if (empty($teacher)) {
            Flash::error('Teacher Course not found');

            return redirect(route('become.student'));
        }

        return view('frontend.site.student.course.login_student-course-show', compact('teacher','student', 'course'));
    }

    /**
     * Chapter Methods

     **/

    public function get_frontend_chapters($course_id){

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $course = Subject::find($course_id);

        $chapters = Chapter::where('subject_id', $course_id)->get();

        return view('frontend.site.teacher.chapter.frontend-chapters', compact('teacher', 'chapters', 'course'));
    }

    public function get_frontend_chapter_new($course_id){

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $course = Subject::find($course_id);

        return view('frontend.site.teacher.chapter.frontend-chapter-new', compact('teacher', 'course'));
    }

    public function post_frontend_chapter_new($course_id, Request $request){

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $title = $request->get('title');

        if ($title == "") {
            \Session::flash('title', 'Title is required.');
        }

        $details = $request->get('details');
        if ($details == ""){
            \Session::flash('details', 'Detail is required.');
        }

        $course = Subject::find($course_id);

        $chapter = new Chapter();
        $chapter->subject_id = $course->id;
        $chapter->title = $title;
        $chapter->details = $details;
        $chapter->save();

        return redirect(route('get.frontend.chapters', ['id' => $course->id]));
    }

    public function get_frontend_chapter_edit($chapter_id){
        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $chapter = Chapter::find($chapter_id);
        $course = Subject::find($chapter->subject_id);

        return view('frontend.site.teacher.chapter.frontend-chapter-edit', compact('teacher', 'course','chapter'));
    }

    public function post_frontend_chapter_edit($chapter_id, Request $request){

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $title = $request->get('title');

        if ($title == "") {
            \Session::flash('title', 'Title is required.');
        }

        $details = $request->get('details');
        if ($details == ""){
            \Session::flash('details', 'Detail is required.');
        }

        $subject_id = $request->get('subject_id');

        $chapter = Chapter::find($chapter_id);
        $chapter->subject_id = $subject_id;
        $chapter->title = $title;
        $chapter->details = $details;
        $chapter->save();

        return redirect(route('get.frontend.chapters', ['id' => $chapter->subject_id]));

    }

    public function frontend_chapter_destroy($chapter_id){

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $chapter = Chapter::find($chapter_id);
        $temp_chapter_id = $chapter->subject_id;

        $topics = Topic::where(['subject_id'=> $chapter->subject_id, 'chapter_id'=> $chapter->id])->get();

        foreach ($topics as $topic){
            $topic->delete();
        }

        $chapter->delete();

        return redirect(route('get.frontend.chapters', ['id' => $temp_chapter_id]));

    }


    /**
     * Topic Methods

     **/

    public function get_frontend_topics($chapter_id){

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $chapter = Chapter::find($chapter_id);

        $topics = Topic::where(['subject_id'=> $chapter->subject_id, 'chapter_id'=> $chapter->id])->get();

        return view('frontend.site.teacher.chapter.topic.frontend-topics', compact('teacher', 'chapter', 'topics'));
    }

    public function get_frontend_topic_new($chapter_id){

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $chapter = Chapter::find($chapter_id);

        return view('frontend.site.teacher.chapter.topic.frontend-topic-new', compact('teacher', 'chapter'));
    }

    public function post_frontend_topic_new($chapter_id, Request $request){

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $title = $request->get('title');
        if ($title == "") {
            \Session::flash('title', 'Title is required.');
        }

        $details = $request->get('details');
        $topic_video = $request->get('topic_video');
        if ($topic_video == "") {
            \Session::flash('topic_video', 'Topic video is required.');
        }

        $status = $request->get('status');
        if ($status == "") {
            \Session::flash('status', 'Status is required.');
        }

        $chapter = Chapter::find($chapter_id);

        if(isset($chapter)){

            $topic = new Topic();
            $topic->class_id = $chapter->subject->student_class->id;
            $topic->subject_id = $chapter->subject->id;
            $topic->chapter_id = $chapter->id;
            $topic->title = $title;
            $topic->details = $details;
            $topic->topic_video = $topic_video;
            $topic->status = $status;
            $topic->save();

            \Session::flash('topic_saved_flash_message', 'Topic saved successfully.');
            return redirect(route('get.frontend.topics', ['id' => $chapter->id]));
        }

        \Session::flash('topic_not_saved_flash_message', 'Error unable to save the topic.');
        return redirect(route('get.frontend.topic.new', ['id' => $chapter_id]));

    }

    public  function topic_subjects_by_class(Request $request){
        $data=$request->all();
        $classes= Subject::where("class_id",$data['id'])->get();
//        echo '<option value="-1"> Select Course</option>';
        foreach($classes as $class){
            echo '<option value="'.$class->id.'">'.$class->title.'</option>';
        }
        exit;
    }

    public  function topic_chapter_by_subject(Request $request){
        $data=$request->all();

        $classes=Chapter::where("subject_id",$data['id'])->get();
//        echo '<option value="-1"> Select Chapter</option>';
        foreach($classes as $class){
            echo '<option value="'.$class->id.'">'.$class->title.'</option>';
        }
        exit;
    }

    public function get_frontend_topic_edit($topic_id){
        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $topic = Topic::find($topic_id);

        $chapter = Chapter::find($topic->chapter_id);

        $course = Subject::find($topic->subject_id);

        return view('frontend.site.teacher.chapter.topic.frontend-topic-edit', compact('teacher', 'topic','chapter', 'course'));
    }

    public function post_frontend_topic_edit(Request $request){

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $title = $request->get('title');
        if ($title == "") {
            \Session::flash('title', 'Title is required.');
        }

        $details = $request->get('details');
        $topic_video = $request->get('topic_video');
        if ($topic_video == "") {
            \Session::flash('topic_video', 'Topic video is required.');
        }

        $status = $request->get('status');
        if ($status == "") {
            \Session::flash('status', 'Status is required.');
        }

        $topic_id = $request->get('topic_id');

        $topic = Topic::find($topic_id);

        $chapter = Chapter::find($topic->chapter_id);


        if(isset($topic) && isset($chapter)){

            $topic->title = $title;
            $topic->details = $details;
            $topic->topic_video = $topic_video;
            $topic->status = $status;
            $topic->save();

            \Session::flash('topic_saved_flash_message', 'Topic saved successfully.');
            return redirect(route('get.frontend.topics', ['id' => $chapter->id]));
        }

        \Session::flash('topic_not_saved_flash_message', 'Error unable to save the topic.');
        return redirect(route('get.frontend.topic.new', ['id' => $topic->chapter_id]));

    }

    public function frontend_topic_destroy($topic_id){

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $topic = Topic::find($topic_id);

        $temp_chapter_id = $topic->chapter_id;

        if($topic != null){
        $topic->delete();
            \Session::flash('topic_deleted_flash_message','Topic is deleted.');
        return redirect(route('get.frontend.topics', ['id' => $temp_chapter_id]));
        }

        \Session::flash('topic_not_deleted_flash_message','Error unable to delete topic.');
        return redirect(route('get.frontend.topics', ['id' => $temp_chapter_id]));

    }

    public function get_frontend_topic_show($topic_id){

        if(\Session::get('teacher_id') == null){
            return redirect(route('get.teacher.login'));
        }

        $id = \Session::get('teacher_id');

        $teacher = Teacher::find($id);

        if (!isset($teacher)) {
            \Session::flash('not_found_flash_message','Teacher is not exist.');
        }

        $topic = Topic::find($topic_id);

        $chapter = Chapter::find($topic->chapter_id);

        $course = Subject::find($topic->subject_id);

        return view('frontend.site.teacher.chapter.topic.frontend-topic-show', compact('teacher', 'topic','chapter', 'course'));
    }

    /**
     * @subject course frontend functions
     *
     */

    public function get_all_courses(){
        $courses = Subject::where('status', 'active')->orderBy('id', 'desc')->get();
        return view('frontend.site.courses.courses', compact('courses'));
    }

    public function get_all_students(){
        $students = Student::where('status', 'active')->get();
        return view('frontend.site.student.frontend-students-list', compact('students'));
    }

    public function get_all_teachers(){
        $teachers = Teacher::where('status', 'active')->get();
        return view('frontend.site.teacher.frontend-teachers-list', compact('teachers'));
    }

    public function get_course_intro($id){

        $course = Subject::where(['id'=>$id,'status'=> 'active'])->first();
        if(!isset($course)){
            return redirect(route('frontend.courses'));
        }

        $course = Subject::where(['id'=>$id,'status'=> 'active'])->first();


        return view('frontend.site.courses.course-intro', compact('course'));
    }

    public function index()
    {
        $content = Page::where('name', 'home')->first();
        \Meta::set('title', $content->title);
        \Meta::set('description', $content->meta_description);
        \Meta::set('image', asset($content->image));
        return view('frontend.site.index', compact('content'));
    }

    public function chairmanMessage()
    {
        $content = Page::where('name', 'chairman_message')->first();
        \Meta::set('title', $content->title);
        \Meta::set('description', $content->meta_description);
        \Meta::set('image', asset($content->image));
        return view('frontend.site.chairman-message', compact('content'));
    }
    public function coreValues()
    {
        $content = Page::where('name', 'core_values')->first();
        \Meta::set('title', $content->title);
        \Meta::set('description', $content->meta_description);
        \Meta::set('image', asset($content->image));
        return view('frontend.site.core-values', compact('content'));
    }

    public function ourDedicatedStaff()
    {
        $content = Page::where('name', 'our_dedicated_staff')->first();
        \Meta::set('title', $content->title);
        \Meta::set('description', $content->meta_description);
        \Meta::set('image', asset($content->image));
        return view('frontend.site.our-dedicated-staff', compact('content'));
    }

//    public function imageGalleryCategory()
//    {
//        $content = Page::where('name', 'image_gallery')->first();
//        \Meta::set('title', $content->title);
//        \Meta::set('description', $content->meta_description);
//        \Meta::set('image', asset($content->image));
//        return view('frontend.site.image-gallery-category', compact('content'));
//    }

//    public function imageGallery($id)
//    {
//        $content = Page::where('name', 'image_gallery')->first();
//        \Meta::set('title', $content->title);
//        \Meta::set('description', $content->meta_description);
//        \Meta::set('image', asset($content->image));
//        $galleries = Gallery::where('cat_id', $id)->orderBy('order_image','ASC')->get();
//        $category = HomeGallery::find($id);
//        return view('frontend.site.image-gallery', compact('content','galleries', 'category'));
//    }

    public function video_gallery_search()
    {
        $content = Page::where('name', 'video_gallery')->first();
        return view('frontend.site.video-gallery-search', compact('content'));
    }

    public function about()
    {
        $content = Page::where('name', 'about')->first();
        return view('frontend.site.about', compact('content'));
    }

    public function faq()
    {
        $content = Page::where('name', 'faq')->first();
        return view('frontend.site.faq', compact('content'));
    }

    public function client()
    {
        $content = Page::where('name', 'client')->first();

        return view('frontend.site.client', compact('content'));
    }

    public function exclusive_partners()
    {
        $content = Page::where('name', 'exclusive_partners')->first();

        return view('frontend.site.exclusive-partners', compact('content'));
    }

    public function image_gallery_category1()
    {
        $content = Page::where('name', 'image_gallery_category1')->first();
        return view('frontend.site.image-gallery-category1', compact('content'));
    }

    public function image_gallery1($image_gallery_category_id)
    {
        $content = Page::where('name', 'image_gall')->first();
        $image_galleries = Brand::where('brand_type_id', $image_gallery_category_id)->get();
        return view('frontend.site.image-gallery1', compact('content', 'image_galleries'));
    }


    public function service()
    {
        $content = Page::where('name', 'service')->first();

        return view('frontend.site.service', compact('content'));
    }

    public function whatWeDo()
    {
        $content = Page::where('name', 'what-we-do')->first();

        return view('frontend.site.what-we-do', compact('content'));
    }
    public function download()
    {
        $content = Page::where('name', 'downloads')->first();

        return view('frontend.site.download', compact('content'));
    }

    public function contact()
    {
        $content = Page::where('name', 'contact_form')->first();

        $contact = Contact::first();

        return view('frontend.site.contact', compact('content', 'contact'));
    }

    public function terms_of_service()
    {
        $content = Page::where('name', 'terms_of_service')->first();
//        dd($content);
        \Meta::set('title', $content->title);
        \Meta::set('description', $content->meta_description);
        \Meta::set('image', asset($content->image));

        return view('frontend.site.terms_of_service', compact('content'));
    }

    public function privacy_policy()
    {
        $content = Page::where('name', 'privacy_policy')->first();
//        dd($content);
        \Meta::set('title', $content->title);
        \Meta::set('description', $content->meta_description);
        \Meta::set('image', asset($content->image));

        return view('frontend.site.privacy_policy', compact('content'));
    }

    public function vision()
    {
        $content = Page::where('name', 'vision_mission')->first();


        return view('frontend.site.vision-mission', compact('content'));
    }

    public function director_message()
    {
        $content = Page::where('name', 'director_message')->first();


        return view('frontend.site.director-message', compact('content'));
    }

    public function careers()
    {
        $content = Page::where('name', 'careers')->first();

        return view('frontend.site.careers', compact('content'));
    }

    public function news($slug)
    {

        $page = \App\Models\Admin\News::findBySlug($slug);
        \Meta::set('title', $page->title);
        \Meta::set('description', $page->meta_description);

        return view('frontend.site.news')->with('page', $page);

    }


    public function emailSend(Request $request)
    {

        $fullname = $request->get("fullname");
        $email = $request->get("email");
        $website = $request->get("website");
        $website = $request->get("website");
        // Get Email from User Table
        $user = User::find(1);

        \Mail::send('emails.contact_form',
            [
                'fullname' => $request->get("fullname"),
                'email' => $request->get("email"),
                'website' => $request->get("website"),
                'comment' => $request->get("comment")
            ], function ($m) use ($user) {

            $m->to($user->email, 'DENARO International Traders');
            $m->subject('New Inquiry From DENARO');
            $m->from($user->email,'DENARO International Traders');

        });


        $fail = Mail::failures();
        if(!empty($fail)) throw new \Exception('Could not send message to '.$fail[0]);



        $request->session()->flash('flash_message', 'Your message was successfully sent!');
        return redirect()->back();
    }

    public function galleryCategory($category)
    {

        $images = Gallery::where('category', '=', $category)->get();
        $page = \App\Models\Admin\Page::whereName('gallery')->first();
        \Meta::set('title', $page->title);
        \Meta::set('description', $page->meta_description);
        \Meta::set('image', asset($page->image));

        return view('frontend.site.gallery_detail')
            ->with('page', $page)
            ->with('images', $images);

    }




    public function searchStudentResult(Request $request)
    {

        $regNo = $request->get('reg_no');
        if ($regNo == "") {
            $request->session()->flash('reg_no', 'Student registration no is required');
            return redirect()->back()->withInput();
        }

//        $dob = $request->get('dob');
//        if ($dob == "") {
//            $request->session()->flash('doob', 'Student date of birth is required');
//            return redirect()->back()->withInput();
//        }



        $content = Page::where('name', 'student_marks')->first();
        \Meta::set('title', $content->title);
        \Meta::set('description', $content->meta_description);
        \Meta::set('image', asset($content->image));



        if ($regNo != null ){
            $student = Employee::where('reg_no', $regNo)->first();

            if ($student != null){
                $marks = CarDoor::where('student_id',$student->id)->get();
                return view('frontend.site.student-marks', compact('content','student', 'marks'));
            }else{
                $request->session()->flash('not_found', 'Student marks not found');
                return redirect()->back()->withInput();

            }

        }else{
            return view('frontend.site.student-result', compact('content'));
        }




    }

    public function search(Request $request)
    {

        $books = Book::orderBy('id', 'DESC');

        if ($request->category_id != '')
            $books->where('category_id', '=', $request->category_id);
        if ($request->group_id != '')
            $books->where('group_id', '=', $request->group_id);
        if ($request->author != '')
            $books->where('author', 'like', '%' . $request->author . '%');
        if ($request->topic != '')
            $books->where('details', 'like', '%' . $request->topic . '%');

        $books = $books->get();
        return view('frontend.site.books')->with('books', $books);

    }


    public function searchAll(Request $request)
    {
        if ($request->q) {
            $q = $request->q;
            $books = Book::where('name', 'like', '%' . $q . '%')
                ->orWhere('details', 'like', '%' . $q . '$q')
                ->orWhere('book_code', 'like', '%' . $q . '$q')
                ->orWhere('author', 'like', '%' . $q . '$q');


            return view('frontend.site.books')->with('books', $books);
        }

        $books = Book::all();

        return view('frontend.site.books')->with('books', $books);

    }

}
