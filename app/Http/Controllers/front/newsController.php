<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Newus;
use App\Program;
use App\Project;
use Illuminate\Http\Request;

class newsController extends Controller
{
    public function index(){

        $programs = Newus::all();
        return view('front.news.index' , compact('programs'));

    }

    public function show($id){
        $program = Newus::findOrFail($id);
        return view('front.news.show' , compact('program'));

    }
}
