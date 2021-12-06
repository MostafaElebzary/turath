<?php

namespace App\Http\Controllers\front;

use App\Coverage;
use App\Http\Controllers\Controller;
use App\Program;
use Illuminate\Http\Request;

class CoveragesController extends Controller
{
    public function index(){

        $programs = Coverage::all();
        return view('front.coverages.index' , compact('programs'));

    }

    public function show($id){
        $program = Coverage::findOrFail($id);
        return view('front.coverages.show' , compact('program'));

    }
}
