<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index(){

        $programs = Program::all();
        return view('front.programs.index' , compact('programs'));

    }

    public function show($id){
        $program = Program::findOrFail($id);
        return view('front.programs.show' , compact('program'));

    }
}
