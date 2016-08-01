<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Exame;
use App\Course;
use App\Subject;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){

    	$numberOfUsers=User::all()->count();
    	$numberOfTeachers=User::where('type', 2)->count();
    	$numberOfCourses=Course::all()->count();
    	$numberOfExames=Exame::all()->count();
    	$numberOfSubjects=Subject::all()->count();


    	return view('admin/index',['users'=>$numberOfUsers,'teachers'=>$numberOfTeachers, 'courses'=>$numberOfCourses, 'exames'=>$numberOfExames, 'subjects'=>$numberOfSubjects]);

    	

    }

    public function create(){


    }

    public function users(){
    	$users=User::where('type', 3);
    	return view('admin/users', ['users'=>$users]);

    }

    public function update($id){

    	$user= User::find($id);

    	return view('admin/update', ['user'=>$user]);
    }

    public function disableUser($id){

    	return 'waiting to be puted action';

    }

    public function teachers(){

    	$teachers=User::where('type','=',1);

    	return view('admin/teachers', $teachers);

    }

    public function teachersOut(){


    	return "professpres inscritos";	
    }

    public function coursers(){

    	return view('admin/coursers');

    }

    public function subjects(){

    	return view('admin/subject');

    }
    
    public function exames(){

    	return view('admin/exames');

    }

    public function signUp(){

    	return view('admin/sign-up');

    }


}
