<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Access\User\User;
use Illuminate\Http\Request;
use App\Services\Access\Traits\ConfirmUsers;
use App\Services\Access\Traits\UseSocialite;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Services\Access\Traits\AuthenticatesAndRegistersUsers;
use App\Repositories\Frontend\Access\User\UserRepositoryContract;
use Illuminate\Support\Facades\Hash;
use Flash;
//use Auth;
use Illuminate\Support\Facades\Auth;

/**
 * Class AuthController
 * @package App\Http\Controllers\Frontend\Auth
 */
class AuthController extends Controller
{

    use AuthenticatesAndRegistersUsers, ConfirmUsers, ThrottlesLogins, UseSocialite;

    /**
     * @param UserRepositoryContract $user
     */
    public function __construct(UserRepositoryContract $user)
    {
        //Where to redirect after logging out
        $this->redirectAfterLogout = route('frontend.index');

        $this->user = $user;
    }

    /**
     * Where to redirect users after login / registration.
     * @return string
     */
    public function redirectPath()
    {
        if (access()->allow('view-backend')) {

            return route('admin.dashboard');
        }

        dd('error ok');
        
        return route('frontend.index');
    }

//    public function register(Request $request){
//        if(\Session::get('user_name') != null){
//            return redirect(route('frontend.index'));
//        }
//        $f_name = $request->get('name');
//        $l_name = $request->get('lname');
//        $mobile = $request->get('mobile');
//        $role = $request->get('role');
//        $email = $request->get('email');
//        $password = $request->get('password');
//
//        if (!empty($f_name)&&
//        !empty($l_name)&&
//        !empty($mobile)&&
//        !empty($role)&&
//        !empty($email)&&
//        !empty($password)){
//            $user = new User();
//            $user->name = $f_name;
//            $user->l_name = $l_name;
//            $user->email = $email;
//            $user->mobile = $mobile;
//            $user->role = $role;
//            $hashed = Hash::make($password); // save $hashed value
//            $user->password = $hashed;
//            $user->status = 1;
//            $user->confirmed = 0;
//            $user->confirmation_code = $hashed;
//            $user->remember_token = $hashed;
//            $user->save();
//            Flash::success('You are successfully registered');
//            return redirect(route('auth.login'));
//        }else{
//            Flash::success('Error: unable to register, please check your input.');
//            return redirect(route('auth.register'));
//        }
//    } // function ends



//        public function login(Request $request){
//            if(\Session::get('user_name') != null){
//                return redirect(route('frontend.index'));
//            }
//            $email = $request->get('email');
//            $password = $request->get('password');
//            if (Auth::attempt(
//                ['email' => $email,
//                 'password' => $password,
//                 'status'=>1,
//                 'role'=>2]))
//            {
//                $user = Auth::user();
//                \Session::put('user_name', $user->name);
//
////                dd(\Session::get('user_name'));
//
//                return redirect(route('frontend.student.learning'));
//
//            }else if (Auth::attempt(
//                    ['email' => $email,
//                        'password' => $password,
//                        'status'=>1,
//                        'role'=>1])){
//                $user = Auth::user();
//                \Session::put('user_name', $user->name);
//                return view('frontend.site.teacher.account-teaching');
//
//            }else{
//                return redirect(route('auth.login'));
//            }
//
//
//        } // login fun ends

//        public function logout(Request $request){
////        dd('ok');
//            \Auth::logout();
//            \Session::flush();
//            return redirect(route('frontend.index'));
//
//        }


//
}