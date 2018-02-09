<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class baseListing extends Controller
{
    public function getView(){
        $baseImage=DB::table('base')->where('type','B')->get();
        return view('layouts.baseListing',['base'=>$baseImage]);
    }
}
