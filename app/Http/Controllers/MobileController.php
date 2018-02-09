<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function getGreetingCard(Request $request,$mobile,$oneSignal){
        $usertype='new';
        $hasdata=false;
        $data=[];
        $user=DB::table('mobileData')->where('mobile',$mobile)->get();
        if(count($user)>0){
            $usertype='old';
            DB::table('mobileData')->where('mobile',$mobile)->update(['onesignal'=>$oneSignal]);
            $greetingCards=DB::table('gifts')->where('userId',$user[0]->id)->get();
            if(count($greetingCards)>0){
                $hasdata=true;
                $data=$greetingCards[0];
            }else{
                $hasdata=false;
            }
        }else{
            $userid=DB::table('mobileData')->insertGetId(['mobile'=>$mobile,'onesignal'=>$oneSignal]);
            DB::table('gifts')->where('mobile',$mobile)->get();
            $userType='new';
        }
        return json_encode([
            'user_type'=>$usertype,
            'hasdata'=>$hasdata,
            'data'=>$data]);
    }
}
