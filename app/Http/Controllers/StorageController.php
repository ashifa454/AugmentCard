<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
class StorageController extends Controller
{
    //
    public function addFile(Request $request){
        $path=Storage::disk('spaces')->putFile('/',$request->userFile,'public');
        return $path;
    }
}
