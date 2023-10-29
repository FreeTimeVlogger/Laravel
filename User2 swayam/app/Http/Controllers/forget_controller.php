<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\_register;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class forget_controller extends Controller
{
    public function send_link(Request $req)
    {

        $req->validate(
            [
                'em' => 'required|email',
            ],
            [
                'em.required' => 'Enter Email address',
                'em.email' => 'Enter Valid Email Address',
            ],
        );
        $email = $req->em;
        $count = _register::where('email', $email)->count();
        $user = _register::where('email', $email)->first();

        if ($count == 1) {

            $data = ['fn' => $user->un, 'em' => $req->em];
            Mail::send(['text' => 'user1/forget_password_mail'], ['data' => $data], function ($message) use ($data) {
                $message->to($data['em'], $data['fn']);
                $message->from('agupta784@rku.ac.in', 'Abhay');
                $message->subject('Forget Password Link');
            });

            // session()->flash('forget', 'Please check your mail for the password change page');
            return redirect('forget')->with('fail', 'Please check your mail for the password change page');
        } else {
            // session()->flash('forget', 'Please Enter Registered email');
            return redirect('forget')->with('forget', 'Please Enter Registered email');

        }
        return view('user1/forgot_pass');
    }

    public function change_password(Request $req)
    {
        $email = $req->email;
        if ($email == '') {
            session()->flash('fail', 'Please click to forget Password and change your password.');
        }
        $req->validate(
            [
                'pwd' => 'required|regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
                'cpwd' => 'required|same:pwd',
            ],
            [
                'pwd.required' => 'Password field Required',
                'pwd.regex' => 'Please choose strong password with atleast 1 Uppercase 1 Lowercase minimum length 8 and a symbol.',
                'cpwd.same' => 'Enter Same Password as Above.',
                'cpwd.required' => 'Confirm Password is required',
            ],
        );


        $result = _register::where('email', $email)->update(['password' => $req->pwd]);

        if ($result) {
            session()->flash('Active', 'Password changed Successfully');
            session()->forget('Forget_password_email');
        } else {
            session()->flash('login', 'Something Went Wrong');
        }

        return view('user1/beforelogin');
    }

    public function login_check(Request $req)
    {
        $req->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'em.required' => 'Username is required.',
                'pwd.required' => 'Password is required.',
                'em.email' => 'Enter valid Email',
            ],
        );

        $check_login = _register::where('email', $req->em)->first();

        if ($check_login) {
            if ($check_login['password'] == $req->pwd) {

                // session(['user_id' => $check_login['id']]);
                // if ($check_login['User_Type'] == 'Admin') {
                //     // navigate to admin dashboard
                // } else {
                //     return redirect('After_home');
                // }
                return view('index');
            } else {
                session()->flash('login', 'Enter valid password');
            }
        } else {
            session()->flash('login', 'Enter Registered Email Address');
        }
        return redirect('index');
    }
}
