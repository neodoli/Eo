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

    	$cousers= Course::take(6)->orderBy('id', 'desc')->get();

    	return view('index',['courses'=>$cousers]);
    }
}
