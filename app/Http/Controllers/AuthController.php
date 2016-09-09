<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Auth;

class AuthController extends Controller
{
   public function login()
   {

        if (Auth::check())
         {

                return redirect()->back();
        }
        else
        {
          
          return view('auth/login');

        }
   }

   public function doLogin(Request $request)
   {

        $rules=['email'=>'required', 'password'=>'required'];
        $this->validate($request,  $rules);

        if($request->remember==='yes')
        {

              if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], true))

              {

              $user=Auth::user();

              if($user->type===1)
              {

                return redirect('/admin');

              }
              else if($user->type===2)
              {

                  return redirect('/teachers');

              }
              else
              {

                  return redirect('/dashboard');
              }

        }
        else
        {

              return redirect('/login')->with('error', 'Email ou a Senha inválido, tente novamente');

        }




        }
        else
        {


            if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))

            {

                  $user=Auth::user();

                  if($user->type===1)
                  {

                    return redirect('/admin');

                  }
                  else if($user->type===2)
                  {

                      return redirect('/teachers');

                  }
                  else
                  {

                      return redirect('/dashboard');
                  }

            }
            else
            {

                  return redirect('/login')->with('error', 'Email ou a Senha inválido, tente novamente');

            }

        }

        
   }

   public function logout(){

    Auth::logout();

    return redirect()->back();
   }

   public function signUp()
   {

         return view('auth/signup')->with('error','');
   }

   public function doSignUp(Request $request)
   {

        $rules=['name'=>'required', 'email'=>'required','contact'=>'required|min:9|max:9', 'password'=>'required', 'nickName'=>'required'];

        $this->validate($request, $rules);

        $userEmail=User::where('email',$request->email)->first();
        $userNickName=User::where('username',$request->nickName)->first();
        $userContact=User::where('contact',$request->contact)->first();

        if($userEmail==null){

            if ($userNickName==null) 
            {
              if($userContact==null)
              {
                  $user= new User;

                  $user->name=$request->name;
                  $user->email=$request->email;
                  $user->password=bcrypt($request->password);
                  $user->type=3;
                  $user->contact=$request->contact;
                  $user->username=$request->nickName;
                  $user->created_at=Carbon::now();

                  $user->save();

                  return redirect('/');
              }
              else
              {
                return redirect('/signup')->with('error','Contacto já existe')->withInput($request->input());
              }
             
            }
            else
            {
                 return redirect('/signup')->with('error','Nome de Usuário já existe')->withInput($request->input());
            }

        }
        else
        {

          return redirect('/signup')->with('error','Esse Email já existe')->withInput($request->input());
        }


   }

   



}
