<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Exame;
use App\Course;
use App\Subject;
use App\CourseVideo;
use App\VideoMaterial;
use App\Http\Controllers\Controller;
use Storage;

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
    	$users=User::all();
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

    	$teachers=User::where('type',2);

    	return view('admin/teachers', ["teachers"=>$teachers]);

    }

    public function teachersOut(){


    	$teachers=User::where('type',2);

    	return view('admin/teachers', ["teachers"=>$teachers]);
    }



    //courses 

    public function coursers(){

    	$courses=Course::all();

    	return view('admin/coursers',['courses'=>$courses]);

    }

    public function courser($id){

    	$courser=Course::find($id);

    	return view('admin/coursers', ['course'=>$course]);

    }

    public function couserAddGet()
    {

    
    	return view('admin/course-add')->with('error', '');;

    }

     public function couserAddPost(Request $request){


    	$rules=['name'=>'required', 'description'=>'required', 'image'=>'required', 'subject'=>'required'];
    	
    	//making validation process if everthing is ok the processing continue else the user will be redirect to
    	// to last url with the respectivly error
    	$this->validate($request,$rules);


    	if($request->hasFile('image')){

    		$image=$request->file('image');
    		$imageName=rand(111111111,999999999); 
    		$imageExtension=$image->getClientOriginalExtension();

    		Storage::disk('publicUploads')->put('/course/'.$imageName.".".$imageExtension,file_get_contents($image->getRealPath()));
    		
	    	$courser= new Course;
	    	$courser->name=$request->name;
	    	$courser->description=$request->description;
	    	$courser->disciplina=$request->subject;
	    	$courser->image=$imageName.".".$imageExtension;

	    	$courser->save();
		

    	}else{

    		return redirect('/admin/courses/add')->with('error', 'Não foi encontrado nenhuma imagem, tente Novamente ');
    	}
    	
    	
		return redirect('/admin/courses');
    }

    public function courseUpdate($id, Request $request){


    	$rules=['name'=>'required', 'description'=>'required', 'subject'=>'required'];
    	
    	//making validation process if everthing is ok the processing continue else the user will be redirect to
    	// to last url with the respectivly error
    	$this->validate($request,$rules);

    	if($request->hasFile('image')){

    		$file=$request->file('image');

    		
    		$imageExtension= $file->getClientOriginalExtension();
    		$imageName=rand(111111111,9999999999);

    		Storage::disk('publicUploads')->put('/course/'.$imageName.".".$imageExtension, file_get_contents($file->getRealPath()));

    		Course::where('id',$id)->update(['name'=>$request->name, "description"=>$request->description, "disciplina"=>$request->subject, 'image'=>$imageName.".".$imageExtension]);



    	}else{

    		Course::where('id',$id)->update(['name'=>$request->name, "description"=>$request->description, "disciplina"=>$request->subject]);

    	}


    	return redirect('/admin/courses/'.$id);


    }

    public function courseEdit($id){

    	$course=Course::find($id);
    	

    	return view('admin.course-edit',["course"=>$course, "id"=>$id]);

    }

    

    public function course($id){

    	$course=Course::find($id);
    	$videos=$course->courseVideos;
    	$listNumber=0;

    	return view('admin.course',["course"=>$course,'videos'=>$videos, 'listNumber'=>$listNumber, 'id'=>$id]);


    }

    public function courseVideoAddPost(Request $request, $id){

    	$rules=['name'=>'required','url'=>'required','duracao'=>'required'];

    	$this->validate($request, $rules);

    	$video= new CourseVideo;
    	$video->name=$request->name;
    	$video->url=$request->url;
    	$video->duration=$request->duracao;
    	$video->id_course=$id;
    	$video->save();

    	return redirect('admin/courses/'.$id);

    }

     public function courseVideoAddGet($id){

     	return view('admin.course.course-video-add',['id'=>$id]);
    	
    }

     public function courseVideo($courseId, $videoId){

     	$video=CourseVideo::find($videoId);
     	$materials=$video->videoMaterials;  
     	$comments=$video->videoComments;
     	$listNumber=1;

     	return view('admin.course.course-video',['courseId'=>$courseId, 'video'=>$video, 'listNumber'=>$listNumber,'materials'=>$materials, 'comments'=>$comments, 'videoId'=>$videoId]);
    	
    }

    public function courseVideoEdit($courseId,$videoId){

    	$video=CourseVideo::find($videoId);

    	return view ('admin.course.course-video-edit', ['video'=>$video, 'id'=>$courseId]);


    }

    public function courseVideoUpdate(Request $request, $courseId,$videoId){

    	$rules=['name'=>'required', 'url'=>'required', 'duration'=>'required'];

    	$this->validate($request, $rules);

    	$video= CourseVideo::where('id',$videoId )
    	->update(['name'=>$request->name, 'url'=>$request->url,'duration'=>$request->duration ,'id_course'=>$courseId]);
    	
    	return redirect('admin/courses/'.$courseId.'/video/'.$videoId);


    }

    public function courseVideoDelete($idCourse, $idVideo){

    	$video=CourseVideo::find($idVideo);
    	$video->delete();

    	return redirect('admin/courses/'.$idCourse);


    }


   


    public function courseVideoMaterialCreate($id, $idVideo){

    	return view('admin.course.course-video-material-create',['id'=>$id, 'idVideo'=>$idVideo,'error'=>""]);
    }

    public function courseVideoMaterialDoCreate(Request $request,$id, $idVideo){

    	$rules=['name'=>'required', 'file'=>'required'];

    	$this->validate($request, $rules);

    	if($request->hasFile('file')){

    		$file=$request->file('file');
    		$fileExtensio=$file->getClientOriginalExtension();
    		$fileName=rand(111, 999999999999);

    		Storage::disk('publicUploads')->put('/course/materials/'.$fileName.'.'.$fileExtensio, \File::get($file));

    		$material= new VideoMaterial;
	    	$material->name=$request->name;
	    	$material->url=$fileName.".".$fileExtensio;
	    	$material->id_video= $idVideo;
	    	$material->save();

	    	return redirect('/admin/courses/'.$id.'/video/'.$idVideo);

    	}else{

    		return redirect('admin/course/course-video-material-create')->with('error', 'Nenhum ficheiro foi encontrado');
    	}


    	



    }

    public function courseVideoMaterialDelete($idCourse, $idVideo, $idMaterial){

    	$material=VideoMaterial::find($idMaterial);
    	$material->delete();

    	return redirect('/admin/courses/'.$idCourse.'/video/'.$idVideo);
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
