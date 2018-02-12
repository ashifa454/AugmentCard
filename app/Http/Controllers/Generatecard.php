<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Generatecard extends Controller
{
    //
    public function getView(Request $request,$overlay){
        if(session('baseImage')){
            session(['overlay'=>$overlay]);
            $image=DB::table('base')->where('id',session('baseImage'))->select('image')->get();
            return view('layouts.orderComplete',['overlayImage'=>$overlay,'base'=>$image[0]->image]);
        }else{
            return redirect()->route('home');
        }
    }
    public function generate(Request $request){

        DB::table('gifts')->insertGetId(['userId'=>$request['mobile'],'baseImage'=>session('baseImage'),'overlayData'=>session('overlay'),'isOpened'=>0]);
        session()->forget('all');
        return redirect()->route('home');;
    }
}
