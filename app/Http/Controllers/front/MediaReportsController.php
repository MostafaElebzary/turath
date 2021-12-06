<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\MediaReport;
use App\Program;
use Illuminate\Http\Request;

class MediaReportsController extends Controller
{
    public function index(){

        $programs = MediaReport::all();
        return view('front.mediareports.index' , compact('programs'));

    }

    public function show($id){

        $program = MediaReport::findOrFail($id);
        return view('front.mediareports.show' , compact('program'));

    }
}
