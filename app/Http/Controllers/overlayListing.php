<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class overlayListing extends Controller
{
    //
    public function getView(Request $request,$baseId){

        $overlay=DB::table('base')->where('type','O')->get();
        session(['baseImage'=>$baseId]);
        return view('layouts/overlayListing',['overlay'=>$overlay]);
    }
}
