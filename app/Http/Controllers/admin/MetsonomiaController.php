<?php

namespace App\Http\Controllers\admin;

use App\Coverage;
use App\Http\Controllers\Controller;
use App\MediaReport;
use App\Metsonomia;
use App\Newus;
use App\Project;
use Illuminate\Http\Request;


class MetsonomiaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = Metsonomia::all();
        return view('metsonomia.index', \compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('metsonomia.create');
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
                'name' => 'required',
                'job' => 'required',
                'text' => 'required',
                'image' => 'required',


            ]);


        Metsonomia::create($data);
        session()->flash('success', trans('admin.addedsuccess'));
        return redirect(url('metsonomia'));
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
        $user_data = Metsonomia::where('id', $id)->first();
        return view('metsonomia.edit', \compact('user_data'));

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
                'name' => 'required',
                'job' => 'required',
                'text' => 'required',
                'image' => 'nullable',
            ]);


        $program = Metsonomia::where('id', $id)->first();
        $program->name = $request->name;
        $program->job = $request->job;
        $program->text = $request->text;


        if ($request->image !=null) {
            $program->image = $request->image;
        }
        $program->save();
        session()->flash('success', trans('admin.editsuccess'));
        return redirect(url('metsonomia'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Metsonomia::findOrFail($id);
        $user->delete();
        session()->flash('success', trans('admin.deletesuccess'));


        return redirect(url('metsonomia'));

    }
}
