<?php

namespace App\Http\Controllers\admin;

use App\Coverage;
use App\Http\Controllers\Controller;
use App\MediaReport;
use App\Newus;
use App\Partner;
use App\Project;
use Illuminate\Http\Request;


class partnersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = Partner::all();
        return view('partners.index', \compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.create');
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

                'image' => 'required',


            ]);


        Partner::create($data);
        session()->flash('success', trans('admin.addedsuccess'));
        return redirect(url('partners'));
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


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Partner::findOrFail($id);
        $user->delete();
        session()->flash('success', trans('admin.deletesuccess'));


        return redirect(url('partners'));

    }
}
