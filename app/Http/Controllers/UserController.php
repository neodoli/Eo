<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\UserCourse;
use Carbon\Carbon;
use \App\Course;
use \App\Exame;
use \App\Payment;
use Storage;
use \App\CourseVideo;
use App\CourseCategorie;
use App\Subject;
use App\Teacher;
use App\User;
use App\Cupom;
use App\UserCupom;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {

        $user=Auth::user();
        $userCourses=UserCourse::where('id_user',$user->id)
                                ->where('confirmed','yes')
                                ->where('end_at','>', Carbon::now())
                                ->get();

        return view('user.dashboard', ['userCourses'=> $userCourses]);
    }

    public function requested(){

        $user=Auth::user();
        $userCourses= UserCourse::where('id_user',$user->id)
                                ->where('confirmed','no')
                                ->where('end_at','>', Carbon::now())
                                ->get();


        return view('user.requested', ['userCourses'=> $userCourses]);


    }

    public function old(){

         $user=Auth::user();
        $userCourses= UserCourse::where('id_user',$user->id)
                                ->where('confirmed','yes')
                                ->where('end_at','<', Carbon::now())
                                ->get();


        return view('user.old', ['userCourses'=> $userCourses]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user=Auth::user();
        return view('user.profile', compact('user'));
    }

     public function cupomStore(Request $request)
    {
       
        $rules=['cumpom'=>'required'];

        $this->validate($request, $rules);

        $cumpom=Cupom::where('codigo',$request->cumpom)->first();
        
        if($cumpom==null){

            return redirect('/profile')->with('cupomerror', 'Código inválido');
        }

        else
        {
            $user=Auth::user();
            $userCupom=UserCupom::where('user_id',$user->id)
                            ->where('end_at','>', Carbon::now())
                            ->first();
                               

            if($userCupom!=null){

                 return redirect('/profile')->with('cupomerror', 'ja está a usar um bónus que esxpira à '.$userCupom->end_at);

            }

          
            $date= new Carbon($cumpom->start_at);
            $userCupom=new UserCupom;
            $userCupom->cupom_codigo=$request->cumpom;
            $userCupom->user_id= $user->id;
            $userCupom->end_at=$date->addDays($cumpom->days);
            $userCupom->save();
            $cumpom->delete();
            User::where('id',$user->id)->update(['type'=>'4']);

            return redirect('/logout')->with('info', 'Acabou the adicionar um cupão, entre novamente para salvar as açterações');
            
        }



       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profileUpdate(Request $request)
    {
        $rules=['fullname'=>'required', 'username'=>'required', 'email'=>'required', 'contact'=>'required'];
        $this->validate($request,$rules);

        User::where('id',Auth::user()->id)->update(['name'=>$request->fullname, 'username'=>$request->username, 'email'=>$request->email, 'contact'=>$request->contact]);

        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profileEdit($id)
    {
        //
    }

    
    public function signup($name)
    {

/**------------------------------------------------------------------------------------------------------*/
        if(Auth::check())
        {
             $course=Course::where('name',$name)->first();
             $user=Auth::user();
             $currentTime= Carbon::now();
             $endDay= Carbon::now();
             $userCupom=UserCupom::where('user_id',  $user->id)->first();

             $isSignup=UserCourse::where('id_user', $user->id)
                                 ->where('id_course', $course->id)
                                 ->first();
             

            if($course->price!=0)
            {

            
                if($userCupom!=null) 
                {

                    if($userCupom->end_at>Carbon::now())
                    {
                        if($isSignup!=null)
                        {
                             return redirect('/classroom/'.$course->name.'/'.$course->courseVideos->first()->name);
                        }
                        else
                        {
                             $userCourse= new UserCourse;
                             $userCourse->id_user=$user->id;
                             $userCourse->id_course=$course->id;
                             $userCourse->start_at=$currentTime;
                             $userCourse->end_at= $userCupom->end_at;

                             /*signup with id_payment=1 referes to signup where de course price is zero or is a prised user.*/

                             $userCourse->id_payment=1;
                             $userCourse->confirmed="yes";
                             $userCourse->save();

                             return redirect('/dashboard');

                        }
                            

                    }
                    else
                    {
                     return view('page/course-signup',['id'=>$name]);
                    }
                
                    
                }
                else
                {
                     if($isSignup!=null)
                     {
                        return redirect('/classroom/'.$course->name.'/'.$course->courseVideos->first()->name);
                     }
                     else
                    {
                         return view('page/course-signup',['id'=>$name]);
                    }

                    
                }

                

            }
            else
            {
                if($isSignup!=null)
                {
                     return redirect('/classroom/'.$course->name.'/'.$course->courseVideos->first()->name);
                }
                else
                {
                    $userCourse= new UserCourse;
                     $userCourse->id_user=$user->id;
                     $userCourse->id_course=$course->id;
                     $userCourse->start_at=$currentTime;
                     $userCourse->end_at= $endDay->addDays(($request->mounthNumber)*33);

                       /*signup with id_payment=1 referes to signup where de course price is zero or is a prised user.*/

                     $userCourse->id_payment=1;
                     $userCourse->confirmed="yes";
                     $userCourse->save();

                     return redirect('/dashboard');

                }
               
                      

            }
           
        }
        else
        {

            return view('/login');
    
        }


/**------------------------------------------------------------------------------------------------------*/      
    }

    public function doSignup(Request $request, $name){

        $rules=['mounthNumber'=>'required',  'data'=>'required'];

       
        $course=Course::where('name',$name)->first();
        $user=Auth::user();
        $currentTime= Carbon::now();
        $endDay= Carbon::now();


             $this->validate($request, $rules);
        
             if($request->hasFile('data'))
             {

            $file=$request->file('data');
            $imageName=rand(11111111,999999999);
            $imageExtension=$file->getClientOriginalExtension();
        
            $payment= new payment;
            $payment->date= $currentTime;
            $payment->file=$imageName.'.'.$imageExtension;

            Storage::disk('publicUploads')->put('/payment/'.$imageName.'.'.$imageExtension, \File::get($file));

            $payment->save();

            
            $userCourse= new UserCourse;
            $userCourse->id_user=$user->id;
            $userCourse->id_course=$course->id;
            $userCourse->start_at=$currentTime;
            $userCourse->end_at= $endDay->addDays(($request->mounthNumber)*33);
            $userCourse->id_payment=$payment->id;
            $userCourse->confirmed="no";
            $userCourse->save();

            return redirect('/dashboard');

        }else{

                return redirect('/courses/'.$course->name.'/signup')->with('error','Por Favor Insira o recíbo ou talão de deposito');
        }

    

      

        
    }

    public function classroom($courseName, $class){

        $course=Course::where('name', $courseName)->first();

        $video=CourseVideo::where('name', $class)->first();
        $materials=$video->videoMaterials;
        $listNumber=0;

        return view('page.class', ['course'=>$course, 'materials'=>$materials,'video'=>$video, 'listNumber'=>$listNumber]);


    }

  
}
