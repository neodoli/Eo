<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\Course;

class HomeController extends Controller
{
    //

    public function index(){

    	$cousers= Course::all();

    	return view('index',['courses'=>$cousers]);
    }
}
