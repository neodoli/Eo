<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserCourse;

class SignupController extends Controller
{

    public function courseSignup(){

        $signups=UserCourse::where('saw', 'no')->get();

        return view('admin.signup.signups', ['signups'=> $signups]);
    }

    public function courseSignup(){

        return view('admin.signup.signup-details');
    }

     public function courseSignupConfirmed(){

        return view('admin.signup.signup-details');
    }

    public function courseSignupNotConfirmed(){

        return view('admin.signup.signup-details');
    }
    
}
