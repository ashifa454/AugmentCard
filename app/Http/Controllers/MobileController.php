<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use FFMpeg;
class MobileController extends Controller
{
    public function getGreetingCard(Request $request,$mobile,$oneSignal){
        $usertype='new';
        $hasdata=false;
        $data=[];
        $ffprobe = FFMpeg\FFProbe::create();
        $user=DB::table('mobileData')->where('mobile',$mobile)->get();
        if(count($user)>0){
            $usertype='old';
            DB::table('mobileData')->where('mobile',$mobile)->update(['onesignal'=>$oneSignal]);
            $greetingCards=DB::table('gifts')->where('userId',$user[0]->mobile)
            ->orderBy('dateTime', 'desc')
            ->get();
            if(count($greetingCards)>0){
                $hasdata=true;
                $dimension = $ffprobe
                ->streams('https://greetingsbucket.nyc3.digitaloceanspaces.com/'.$greetingCards[0]->overlayData) 
                ->videos()                      // filters video streams
                ->first()                       // returns the first video stream
                ->getDimensions();
                $greetingCards[0]->h=$dimension->getHeight();
                $greetingCards[0]->w=$dimension->getWidth();
                $data=$greetingCards[0];
            }else{
                $hasdata=false;
            }
        }else{
            $userid=DB::table('mobileData')->insertGetId(['mobile'=>$mobile,'onesignal'=>$oneSignal]);
            DB::table('gifts')->where('userId',$mobile)
            ->orderBy('dateTime', 'desc')
            ->get();
            $userType='new';
        }
        return json_encode([
            'user_type'=>$usertype,
            'hasdata'=>$hasdata,
            'data'=>$data]);
    }
}
