<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Exame;
use App\Course;
use App\Subject;
use App\SubjectClasse;
use App\CourseVideo;
use App\VideoMaterial;
use App\CourseCategorie;
use App\ExameCategorie;
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

    public function courses(){

    	$courses=Course::all();

    	return view('admin/course/courses',['courses'=>$courses]);

    }

    public function coursesCategorieAdd(){

    	return view('admin.course.categorie-add');
    }

    public function coursesCategorieStore(Request $request){

    	$rules=['name'=>'required',  'type'=>'required'];

    	$this->validate($request, $rules);

    	$courseCategorie= new  CourseCategorie;
    	$courseCategorie->name= $request->name;
    	$courseCategorie->type= $request->type;

    	$courseCategorie->save();

    	return redirect('/admin/courses');


    }

 

    public function courseAdd()
    {

    	$subjects=Subject::all();
    	$categories=CourseCategorie::all();


    
    	return view('admin/course/course-add', ['subjects'=>$subjects, 'categories'=>$categories])->with('error', '');

    }

     public function courseStore(Request $request){


    	$rules=['name'=>'required', 'price'=>'required','description'=>'required', 'image'=>'required', 'subject'=>'required','stage'=>'required','price'=>'required'];
    	
    	//making validation process if everthing is ok the processing continue else the user will be redirect to
    	// to last url with the respectivly error
    	$this->validate($request,$rules);


    	if($request->hasFile('image')){

    		$image=$request->file('image');
    		$imageName=rand(111111111,999999999); 
    		$imageExtension=$image->getClientOriginalExtension();

    		Storage::disk('publicUploads')->put('/course/'.$imageName.".".$imageExtension,file_get_contents($image->getRealPath()));
    		
	    	$course= new Course;
	    	$course->name=$request->name;
	    	$course->description=$request->description;
	    	$course->id_subject=$request->subject;
	    	$course->type_categorie=$request->stage;
            $course->price= $request->price;
	    	$course->available='no';
	    	$course->image=$imageName.".".$imageExtension;

	    	$course->save();
		

    	}else{

    		return redirect('/admin/courses/add')->with('error', 'Não foi encontrado nenhuma imagem, tente Novamente ');
    	}
    	
    	
		return redirect('/admin/courses');
    }

    public function courseActive($id){

    	$course=Course::findOrFail($id);

    	$course->available='yes';

    	$course->save();

    	return redirect('/admin/courses');


    }

    public function courseUpdate($id, Request $request){


    	$rules=['name'=>'required', 'description'=>'required', 'subject'=>'required', 'stage'=>'required'];
    	
    	//making validation process if everthing is ok the processing continue else the user will be redirect to
    	// to last url with the respectivly error
    	$this->validate($request,$rules);

    	if($request->hasFile('image')){

    		if($request->subject==0 || $request->stage==0){

    			return redirect('/admin/courses/'.$id)->with('error','Verifique se selecionou a disciplina ou o nivel');


    		}else{

    				$file=$request->file('image');

    		
    		$imageExtension= $file->getClientOriginalExtension();
    		$imageName=rand(111111111,9999999999);

    		Storage::disk('publicUploads')->put('/course/'.$imageName.".".$imageExtension, file_get_contents($file->getRealPath()));

    		Course::where('id',$id)->update(['name'=>$request->name,'price'=>$request->price, "description"=>$request->description, "id_subject"=>$request->subject, 'image'=>$imageName.".".$imageExtension, 'type_categorie'=>$request->stage]);



    		}

    	


    	}else{


            if($request->subject==0 || $request->stage==0){

                return redirect('/admin/courses/'.$id.'/edit')->with('error','Verifique se selecionou a Disciplina ou o Nivel');


            }else{

                    Course::where('id',$id)->update(['name'=>$request->name,'price'=>$request->price, "description"=>$request->description, "id_subject"=>$request->subject, 'type_categorie'=>$request->stage]);



            }

    	
    	}


    	return redirect('/admin/courses/'.$id);


    }

    public function courseEdit($id){

    	$course=Course::find($id);
    	$subjects=Subject::all();
    	$categories=CourseCategorie::all();
    	

    	return view('admin.course.course-edit',["course"=>$course, "id"=>$id, 'subjects'=>$subjects, 'categories'=>$categories]);

    }

    

    public function course($id){

    	$course=Course::find($id);
    	$videos=$course->courseVideos;
    	$categorie=$course->courseCategorie;
    	$listNumber=0;

    	return view('admin.course.course',["course"=>$course,'videos'=>$videos, 'listNumber'=>$listNumber, 'id'=>$id, 'categorie'=>$categorie]);


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

    	$subjects= Subject::all();

    	return view('admin/subject/subject', ['subjects'=>$subjects]);

    }

    public function subjectCreate(){

    	return view('admin.subject.subject-add')->with('error','');


    }

     public function subjectStore(Request $request){

    	$rules=['name'=>'required'];
    	$this->validate($request, $rules);

    	if(Subject::where('name','=',$request->name)->first()==null){

    			$subject= new Subject;
		    	$subject->name=$request->name;
		    	$subject->save();

		    	return redirect('/admin/subjects');

    	}else{

    		return redirect('/admin/subjects/create')->with('error','Disciplina já existente, tente com outro nome');

    	}

    }

    public function subjectsUpdate(Request $request, $id){

    	$this->validate($request, ["name"=>'required']);

    	$subjects=Subject::where('id',$id)->update(['name'=>$request->name]);

    	return redirect('/admin/subjects/');


    }

    public function subjectsEdit( $id){

    	$subject=Subject::find($id);

    	return view('admin.subject.subject-edit',['subject'=>$subject]);


    }

    public function subjectsClasse($id){

    	$subjectClasses=Subject::find($id)->subjectClasse;

    	return view('admin.subject.subject-classe', ['subjectClasses'=>$subjectClasses, 'idSubject'=>$id]);
    }

    public function subjectsClasseCreate($id){

    		return view('admin.subject.subject-classe-add',['id'=>$id]);
    }

     public function subjectsClasseStore(Request $request, $idSubject){

     		$rules=['type'=>'required', 'description'=>'required', 'file'=>'required'];

     		$this->validate($request,$rules);

     		if($request->hasFile('file')){

     			if($request->type!=0){

     			$file=$request->file('file');
	     		$fileExtension=$file->getClientOriginalExtension();
	     		$fileName=rand(1111111111, 99999999999);
	     		$imageName=$fileName.'.'.$fileExtension;

	     		Storage::disk('privateUploads')->put('/exame/'.$imageName, \File::get($file));

	     		$subjectClasse= new SubjectClasse;
	     		$subjectClasse->id_subject=$idSubject;
	     		$subjectClasse->type=$request->type;
	     		$subjectClasse->description=$request->description;
	     		$subjectClasse->url=$imageName;
	     		$subjectClasse->save();


	     		return redirect('/admin/subjects/'.$idSubject.'/classe');


     			}else{

     				return redirect()->back()->with('error','Selecione o tipo de Exame');


     			}

	     		


     		}else{

     				return redirect()->back()->with('error','Selecione uma image');
     		}

     		
     		







     		$subjectClasse->save();



    		return view('admin.subject.subject-classe-add');
    }

     public function subjectsClasseEdit($idSubject, $idClasse){

     		$subjectClasse= SubjectClasse::findOrFail($idClasse);

    		return view('admin.subject.subject-classe-edit', ['subjectClasse'=>$subjectClasse, 'id'=>$idSubject]);
    }

       public function subjectsClasseUpdate(Request $request, $idSubject, $idClasse){

       		$rules=['type'=>'required', 'description'=>'required'];
       		$this->validate($request, $rules);

       		if ($request->type!=0) {

       			if( $request->hasFile('file')){

       				$file=$request->file('file');
       				$fileExtension=$file->getClientOriginalExtension();
       				$fileName= rand(1111111111,9999999999);
       				$imageName=$fileName.'.'.$fileExtension;

		       		$subjectClasse= SubjectClasse::findOrFail($idClasse);
		       		$oldFileName=$subjectClasse->url;

		       		if (Storage::disk('privateUploads')->exists('/exame/'.$oldFileName)){

		       			Storage::disk('privateUploads')->delete('/exame/'.$oldFileName);
		       		}

		       		Storage::disk('privateUploads')->put('/exame/'.$imageName, \File::get($file));


		       		$subjectClasse->description=$request->description;
		       		$subjectClasse->type=$request->type;
		       		$subjectClasse->url=$imageName;

		       		$subjectClasse->save();

		       		return redirect('/admin/subjects/'.$idSubject.'/classe');

		       	}
		       	else{


		       		$subjectClasse= SubjectClasse::find($idClasse);
		       		$subjectClasse->description=$request->description;
		       		$subjectClasse->type=$request->type;
		       		

		       		$subjectClasse->save();

		       		return redirect('/admin/subjects/'.$idSubject.'/classe');


		       		}

       		}
       		else{

       				return redirect()->back()->with('error', 'Selecione o tipo de exame antes de prossegir');

       		}
    		
    }

    public function subjectsClasseDelete($idSubject, $idClasse){

    	$subjectClasse= SubjectClasse::findOrFail($idClasse);
    	$fileName= $subjectClasse->url;
    	if(Storage::disk('privateUploads')->exists('/exame/'.$fileName)){
    		Storage::disk('privateUploads')->delete('/exame/'.$fileName);
    	}

    	$subjectClasse->delete();


    	return redirect('/admin/subjects/'.$idSubject.'/classe');
    	
    }





    
    public function exames(){

    	$exames=Exame::all();
    	return view('admin/exame/exames', ['exames'=>$exames]);

    }

    public function exameAdd(){

        $exameCategories=ExameCategorie::all();
        $subjects=Subject::all();

        return view('admin.exame.exame-add',['error'=>'', 'categories'=> $exameCategories,'subjects'=>$subjects]);

    }

    public function exameStore(Request $request){

        $rules=['subject'=>'required', 'season'=>'required', 'type'=>'required', 'year'=>'required', 'description'=>'required', 'file'=>'required'];

        $this->validate( $request, $rules);



        if($request->hasFile('file')){

            $image=$request->file('file');
            $imageName=rand(111111111,999999999); 
            $imageExtension=$image->getClientOriginalExtension();

            Storage::disk('publicUploads')->put('/exame/'.$imageName.".".$imageExtension,file_get_contents($image->getRealPath()));
            
            $exame= new Exame;
            $exame->season=$request->season;
            $exame->description=$request->description;
            $exame->id_subject=$request->subject;
            $exame->type_categorie=$request->type;
            $exame->year=$request->year;
            $exame->image=$imageName.".".$imageExtension;

            $exame->save();
        

        }else{

            return redirect('/admin/exame/add')->with('error', 'Não foi encontrado nenhuma imagem, tente Novamente ');
        }
        
        
        return redirect('/admin/exames');


    }



    public function exame($id){

        $exame=Exame::findOrFail($id);

        return view ('admin.exame.exame');


    }


    public function exameEdit($id){


    }

    public function exameUpdate(Request $request, $id){


    }

    public function exameCategorieAdd(){

    	return view('admin.exame.exame-categorie-add');
    }

    public function exameCategorieStore(Request $request){


    	$rules=['name'=>'required', 'price'=>'required', 'type'=>'required'];

    	$this->validate($request, $rules);

    	$exameCategorie= new  ExameCategorie;
    	$exameCategorie->name= $request->name;
    	$exameCategorie->price= $request->price;
    	$exameCategorie->type= $request->type;

    	$exameCategorie->save();

    	return redirect('/admin/exames');


    }




    public function signUp(){

    	return view('admin/sign-up');

    }


}
