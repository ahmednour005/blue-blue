<?php

namespace App\Http\Controllers;

use App\Models\Testmonial;
use Illuminate\Http\Request;

class TestmonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testmonials=Testmonial::all();
        return view('dashboard.testmonial.index',compact('testmonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.testmonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'job_ar' => 'required:string',
            'job_en' => 'required:string',
            'image' => 'required|image',
            'message_ar' => 'required',
            'message_en' => 'required',

        ]);
        $testmonial= new Testmonial();

        $testmonial->name_ar=$request->name_ar;
        $testmonial->name_en=$request->name_en;
        $testmonial->job_ar=$request->job_ar;
        $testmonial->job_en=$request->job_en;

        if ($request->hasFile('image')) {
            $image_name = time() . '-category.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads'), $image_name);
            // unlink('uploads/'. $testmonial->image);

            $testmonial->image=$image_name;
        }
        $testmonial->message_ar=$request->message_ar;
        $testmonial->message_en=$request->message_en;

       $testmonial->save();
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testmonial  $testmonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testmonial $testmonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testmonial  $testmonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testmonial=Testmonial::find($id);
        return view('dashboard.testmonial.edit',compact('testmonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testmonial  $testmonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'job_ar' => 'required:string',
            'job_en' => 'required:string',
            'message_ar' => 'required',
            'message_en' => 'required',

        ]);
        $testmonial=Testmonial::find($id);
        $testmonial->name_ar=$request->name_ar;
        $testmonial->name_en=$request->name_en;
        $testmonial->job_ar=$request->job_ar;
        $testmonial->job_en=$request->job_en;
        if ($request->hasFile('image')) {
            $image_name = time() . '-testmonial.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads'), $image_name);
            // unlink('uploads/'. $testmonial->image);
            $testmonial->image=$image_name;
        }
        $testmonial->message_ar=$request->message_ar;
        $testmonial->message_en=$request->message_en;

        $testmonial->save();
       return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testmonial  $testmonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testmonial::find($id)->delete();
        return redirect()->back();
    }
}
