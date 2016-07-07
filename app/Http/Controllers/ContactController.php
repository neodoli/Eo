<?php 

 namespace App\Http\Controllers;
 use Illuminate\Routing\Controller;

  class ContactController extends Controller{


 	public function index(){

 		return "chauque";

 	}

 	public function contact (){

 		$name=['ornelio'];
 		

 		return View('contact',$name);

 	}


 }




?>