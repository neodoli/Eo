<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\Course;
use \App\Exame;
use \App\Payment;
use \App\UserCourse;
use Auth;
use Carbon\Carbon;
use Storage;
use \App\CourseVideo;
use App\CourseCategorie;
use App\Subject;
use App\Teacher;

class HomeController extends Controller
{
    //

    public function index(){

    	$cousers= Course::take(4)->orderBy('id', 'desc')->get();
    	$exames= Exame::take(4)->orderBy('id', 'desc')->get();

    	return view('index',['courses'=>$cousers, 'exames'=>$exames]);
    }

    public function course($name){

    	$course=Course::where('name',$name)->first();
    	$listNumber=1;
    	return view('page/course-details',['course'=>$course, 'listNumber'=>$listNumber]);

    }


    public function courses(){

    	$courses=Course::all();
    	

    	$subjects=Subject::all();

    	$categories=CourseCategorie::all();



    	return view('page.courses', ['courses'=>$courses,'subjects'=>$subjects, 'categories'=>$categories]);


    }

    public function coursesStage($name){

    	$courseCategorie=CourseCategorie::where('name',$name)->first();
    	$courses=Course::where('type_categorie',$courseCategorie->type)->get();
    	
    	$subjects=Subject::all();

    	$categories=CourseCategorie::all();



    	return view('page.courses', ['courses'=>$courses,'subjects'=>$subjects, 'categories'=>$categories]);


    }

    public function coursesSubject($name){

    	$subjectId=Subject::where('name',$name)->first();
    	$courses=Course::where('id_subject',$subjectId->id)->get();
    	

    	$subjects=Subject::all();

    	$categories=CourseCategorie::all();



    	return view('page.courses', ['courses'=>$courses,'subjects'=>$subjects, 'categories'=>$categories]);

    }


    public function teachersOut()
    {
    	return view('page.teachersOut');
    }

     public function teachersOutStore(Request $request)
    {
    		$rules=['name'=>'required', 'email'=>'required','contact'=>'required', 'subjectList'=>'required', 'contentList'=>'required' ];

    		$this->validate($request, $rules);

    		$teacher= new Teacher;
    		$teacher->full_name=$request->name;
    		$teacher->email=$request->email;
    		$teacher->contact=$request->contact;
    		$teacher->send_at=Carbon::now();
    		$teacher->interested_subject=$request->subjectList;
    		$teacher->interested_content=$request->contentList;
    		$teacher->save();

    		return redirect('/congratulation');
    	
    }
}
