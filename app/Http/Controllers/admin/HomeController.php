<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Permission;


class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$this->validate(\request(),
        [
            'name'=>'required|unique:users',

            'job'=>'required',
            'type' => 'required|in:admin,user',
            'status' => 'required|in:active,deactive',

            'mobile'=>'required|numeric',
            'email'=>'required|unique:users',
            'password' => 'required|min:6'

        ]);
        $data['password'] = bcrypt(request('password'));


        $user = User::create($data);
        $user->save();
        $user_id = $user->id;
        $permissions['user_id'] = $user_id;
        $per = Permission::create($permissions);
        $per->save();
        session()->flash('success',trans('admin.addedsuccess'));
        return redirect(url('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_data = User::where('id', $id)->first();
        return view('users.edit', \compact('user_data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate(\request(),
        [
            'name' => 'required|unique:users,name,' . $id,
            'mobile' => 'numeric|required|unique:users,mobile,' . $id,
            'email' =>  'required|unique:users,email,' . $id,

            'job'=>'required',
            'type' => 'required|in:admin,user',
            'status' => 'required|in:active,deactive',
            // 'password' => 'sometimes|nullable|min:6',

        ]);

         if($request->password != null) {
        $data['password'] = Hash::make($request->password);

            }

        User::where('id', $id)->update($data);
        session()->flash('success', trans('admin.editsuccess'));


    return redirect(url('users'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        session()->flash('success', trans('admin.deletesuccess'));


        return redirect(url('users'));

    }
}
