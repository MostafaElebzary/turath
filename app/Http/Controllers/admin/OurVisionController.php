<?php

namespace App\Http\Controllers\admin;

use App\Coverage;
use App\Http\Controllers\Controller;
use App\MediaReport;
use App\Newus;
use App\Project;
use App\Vision;
use App\VisionDetails;
use Illuminate\Http\Request;


class OurVisionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = Vision::first();

        return view('ourvision.index', \compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ourvision.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate(\request(),
            [
                'text' => 'required',



            ]);

        $vision = Vision::first();
        $data['vision_id'] = $vision->id;
        VisionDetails::create($data);
        session()->flash('success', trans('admin.addedsuccess'));
        return redirect(url('our-vision'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate(\request(),
            [
                'title' => 'required',
                'image' => 'nullable',

            ]);


        $program = Vision::where('id', $id)->first();
        $program->title = $request->title;

        if ($request->image !=null) {
            $program->image = $request->image;
        }
        $program->save();
        session()->flash('success', trans('admin.editsuccess'));
        return redirect(url('our-vision'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = VisionDetails::findOrFail($id);
        $user->delete();
        session()->flash('success', trans('admin.deletesuccess'));


        return redirect(url('our-vision'));

    }
}
