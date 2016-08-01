<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AuthController extends Controller
{
   public function login()
   {

        return view('auth/login');

   }

   public function doLogin(Request $request)
   {

        $rules=['email'=>'required', 'password'=>'required'];
        $this->validate($request,  $rules);
        $userName=$request->email;
        $password=$request->password;

        return [$userName, $password];
   }

   public function signUp()
   {
         return view('auth/signup');
   }

   public function doSignUp(Request $request)
   {

        $rules=['name'=>'required', 'email'=>'required', 'password'=>'required', 'rpassword'=>'required'];

        $this->validate($request, $rules);

        $user= new User;

        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->type=1;
        $user->created_at=Carbon::now();

        $user->save();

        return redirect('/');



   }



}
