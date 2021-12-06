<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pdf = Pdf::where('type', $request->type)->get();
        $type = $request->type;

        return view('pdf.index', \compact('pdf', 'type'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type = $request->type;
        return view('pdf.create', \compact('type'));

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
                'pdf' => 'required',
                'type' => 'required',

            ]);

        $user = Pdf::create($data);
        session()->flash('success', trans('admin.addedsuccess'));
        return redirect(route('pdf',['type' => $user->type]));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Pdf::findOrFail($id);
        $user->delete();
        session()->flash('success', trans('admin.deletesuccess'));

        return redirect()->back();
    }
}
