<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Program;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Permission;


class ProgramController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = Program::all();
        return view('programs.index', \compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs.create');
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
                'title' => 'required',
                'description' => 'required',
                'image' => 'required',

            ]);


        Program::create($data);
        session()->flash('success', trans('admin.addedsuccess'));
        return redirect(url('programs'));
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
        $user_data = Program::where('id', $id)->first();
        return view('programs.edit', \compact('user_data'));

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
                'description' => 'required',
                'image' => 'nullable',

            ]);


        $program = Program::where('id', $id)->first();
        $program->title = $request->title;
        $program->description = $request->description;
        if ($request->image !=null) {
            $program->image = $request->image;
        }
        $program->save();
        session()->flash('success', trans('admin.editsuccess'));
        return redirect(url('programs'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Program::findOrFail($id);
        $user->delete();
        session()->flash('success', trans('admin.deletesuccess'));


        return redirect(url('programs'));

    }
}
