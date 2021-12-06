<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Settings;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Hash;


class SettingsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maindata  = Settings::first();

        return view('settings.edit', \compact('maindata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
                'email' => 'required|email',
                'facebook' => 'required',
                'instagram' => 'required',
                'twitter' => 'required',
                'linkedin' => 'required',
                'phone' => 'required',
                'website' => 'required',
                'address' => 'required',
//                'logo' => 'nullable|image|mimes:png,jpg,jpeg',
//                'chart_image' => 'nullable|image|mimes:png,jpg,jpeg',
//                'board_directors_pdf' => 'nullable|mimes:pdf',

            ]);





        Settings::where('id', $id)->update($data);
       $setting =  Settings::where('id', $id)->first();
        if ($request->logo !=null){
            $setting->logo = $request->logo;

        }

        if ($request->chart_image !=null){
            $setting->chart_image = $request->chart_image;

        }

        if ($request->board_directors_pdf !=null){
            $setting->board_directors_pdf = $request->board_directors_pdf;

        }
        $setting->save();

        session()->flash('success', trans('admin.editsuccess'));


        return redirect(url('settings'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
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
