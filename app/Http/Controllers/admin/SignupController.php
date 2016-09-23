<?php

namespace  App\Http\Controllers\admin;;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserCourse;
use Auth;
use App\Payment;
use Carbon\Carbon;


class SignupController extends Controller
{

    public function courseSignups(){

        $signups=UserCourse::where('saw', 'no')->get();

        return view('admin.signup.signups', ['signups'=> $signups]);
    }

    public function courseSignup($userId,$courseId ){

        $signup=UserCourse::where('id_user',$userId)
                            ->where('id_course',$courseId)
                            ->first();

        return view('admin.signup.signup-details',  ['signup'=> $signup, 'id_user'=>$userId, 'id_course'=>$courseId]);
    }

     public function courseConfirm(Request $resquet, $idUser, $idCourse){

        $payment=Payment::where('number', $resquet->numberDoc)->first();

        if($payment!=null){

            return redirect()->back()->with('error', 'talão de deposito usado');

        }

         $signup=UserCourse::where('id_user',$idUser)
                            ->where('id_course',$idCourse)
                            ->first();

         $payment=$signup->payment;

         $payment->update(['number'=>$resquet->numberDoc]);

         $endDate= new Carbon($signup->start_at);

         $signup=UserCourse::where('id_user',$idUser)
                            ->where('id_course',$idCourse)
                            ->update(['end_at'=> $endDate->addDays(33*$resquet->mounthNumber), 'confirmed'=>'yes','saw'=>'yes']);


       return redirect('/admin/courses/signup');
    }

    public function courseProblem($idUser, $idCourse){

        return view('admin.signup.signup-not-confirmed',compact('idUser','idCourse'));
    }

     public function courseProblemStore(Request $resquet, $idUser, $idCourse){

              $rules=['info'=>'required'];
              $this->validate($resquet, $rules);

              $info=$resquet->info." caso tenha alguma reclamação contacte-nos por reclamacao@esplicadoronline.com ";

              $signup=UserCourse::where('id_user',$idUser)
                            ->where('id_course',$idCourse)
                            ->update(['info'=>$info , 'saw'=>'yes', 'confirmed'=>'no']);
            
             return redirect('/admin/courses/signup');
    }
 
    
}
