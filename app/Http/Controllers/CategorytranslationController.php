<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category_translation;
class CategorytranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_translations=category_translation::all();
        return view('dashboard.translation.categories',compact('category_translations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.translation.create-category');
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
            'title_ar' => 'required|string|unique:category_translations',
            'title_en' => 'required|string|unique:category_translations',
            'subtitle_ar' => 'required|string',
            'subtitle_en' => 'required|string',
            'describe_ar' => 'required|string',
            'describe_en' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg',
            'price' => 'required|integer',
        ]);

        $category_translation= new Category_translation();
        $category_translation->title_ar=$request->title_ar;
        $category_translation->title_en=$request->title_en;
        $category_translation->subtitle_ar=$request->subtitle_ar;
        $category_translation->subtitle_en=$request->subtitle_en;
        $category_translation->describe_ar=$request->describe_ar;
        $category_translation->describe_en=$request->describe_en;
        $category_translation->price=$request->price;
        if ($request->hasFile('image')) {
            $image_name = time() . '-category.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads'), $image_name);
            $category_translation->image=$image_name;
        }
        $category_translation->save();

        alert()->success('رسالة نجاح', 'تم  حفظ البيانات  بنجاح');
        return \Redirect::back();

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

        $category_translation=Category_translation::find($id);
        return view('dashboard.translation.update-category',compact('category_translation'));
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
        $validated = $request->validate([
            'title_ar' => 'required|string|unique:category_translations,title_ar,'.$id,
            'title_en' => 'required|string|unique:category_translations,title_en,'.$id,
            'subtitle_ar' => 'required|string',
            'subtitle_en' => 'required|string',
            'describe_ar' => 'required|string',
            'describe_en' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg',
            'price' => 'required|integer',
        ]);

        $category_translation=Category_translation::find($id);
        $category_translation->title_ar=$request->title_ar;
        $category_translation->title_en=$request->title_en;
        $category_translation->subtitle_ar=$request->subtitle_ar;
        $category_translation->subtitle_en=$request->subtitle_en;
        $category_translation->describe_ar=$request->describe_ar;
        $category_translation->describe_en=$request->describe_en;
        $category_translation->price=$request->price;
        if ($request->hasFile('image')) {
            $image_name = time() . '-category.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads'), $image_name);
            // unlink('uploads/'. $category_translation->image);
            $category_translation->image=$image_name;
        }
        $category_translation->save();

        alert()->success('رسالة نجاح', 'تم  حفظ البيانات  بنجاح');
        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 1;
    }

    public function category_translation_delete(Request $request)
    {
        $id=$request->category_id;
        $category_translation=Category_translation::find($id);
        $path="uploads/".$category_translation->image;
        unlink($path);
        $category_translation->delete();
        alert()->success('رسالة نجاح', 'تم  حفظ البيانات  بنجاح');
        return \Redirect::back();
    }

}
