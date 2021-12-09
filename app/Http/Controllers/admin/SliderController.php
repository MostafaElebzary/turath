<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('slider.index', \compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
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

        $slider = Slider::where('id', $id)->first();
        if ($slider == null){
            return redirect('sliders');
        }
        return view('slider.edit', \compact('slider'));
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
        $data = $this->validate(
            \request(),
            [

                'image' => 'required|mimes:jpg,jpeg,png,gif,bmp',

            ]
        );

       $slider =  Slider::where('id', $id)->first();
        $slider->image =$request['image'];
        $slider->save();
        session()->flash('success', trans('admin.updatedsuccess'));
        return redirect(url('sliders'));
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
