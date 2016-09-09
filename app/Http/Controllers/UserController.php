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
        $userCourses= UserCourse::where('id_user',$user->id)
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function perfilEdit(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profileUpdate($id)
    {
        //
    }

    
    public function signup($name)
    {

        if(Auth::check())
        {

            return view('page/course-signup',['id'=>$name]);

        }else{

            return view('/login');
    
        }

        
    }

    public function doSignup(Request $request, $name){

        $rules=['mounthNumber'=>'required', 'numberDoc'=>'required', 'data'=>'required'];

       
        $course=Course::where('name',$name)->first();
        $user=Auth::user();
        $currentTime= Carbon::now();
        $endDay= Carbon::now();


        if($course->price!=0){

             $this->validate($request, $rules);
        
             if($request->hasFile('data')){

            $file=$request->file('data');
            $imageName=rand(11111111,999999999);
            $imageExtension=$file->getClientOriginalExtension();
        
            $payment= new payment;
            $payment->date= $currentTime;
            $payment->number=$request->numberDoc;
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

            return redirect('/courses');

        }else{

                return redirect('/courses/'.$course->name.'/signup')->with('error','Por Favor Insira o recíbo ou talão de deposito');
        }

        }else{


            $userCourse= new UserCourse;
            $userCourse->id_user=$user->id;
            $userCourse->id_course=$course->id;
            $userCourse->start_at=$currentTime;
            $userCourse->end_at= $endDay->addDays((360));
            $userCourse->id_payment=1;
            $userCourse->confirmed="yes";
            $userCourse->save();

            return redirect('/courses');


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
