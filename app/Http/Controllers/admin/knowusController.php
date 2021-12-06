<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Knowus;
use App\KnowusImage;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class knowusController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maindata = Knowus::first();
        return view('knowus.edit', \compact('maindata'));
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

                'text' => 'required',
                'image' => 'nullable|array',
                'image.*' => 'mimes:png,jpg,jpeg'


            ]);


        $knowus = Knowus::where('id', $id)->first();
        $knowus->text = $request->text;
        $knowus->save();

        if ($request->image != null) {
            foreach ($request->image as $image) {
                KnowusImage::create([
                    'image' => $image,
                    'knowus_id' => $knowus->id,
                ]);
            }
        }

        session()->flash('success', trans('admin.editsuccess'));


        return redirect(url('knowus'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = KnowusImage::findOrFail($id);
        $user->delete();
        session()->flash('success', trans('admin.deletesuccess'));


        return redirect(url('knowus'));

    }
}
