<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Program;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){

        $programs = Project::all();
        return view('front.projects.index' , compact('programs'));

    }

    public function show($id){
        $program = Project::findOrFail($id);
        return view('front.projects.show' , compact('program'));

    }
}
