<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_print;
use App\Models\ImageCategoryPrint;
use Carbon\Carbon;

class CategoryprintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_prints=Category_print::all();
        return view('dashboard.print.categories',compact('category_prints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_prints=Category_print::where('parent_id',null)->get();
        return view('dashboard.print.create-category',compact('category_prints'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'title_ar' => 'required|string|unique:category_prints',
            'title_en' => 'required|string|unique:category_prints',
            'subtitle_ar' => 'required|string',
            'subtitle_en' => 'required|string',
            'describe_ar' => 'required|string',
            'describe_en' => 'required|string',
            'image' => 'required',
            'parent_id' => 'nullable',

        ]);

        $category_print= new Category_print();
        $category_print->title_ar=$request->title_ar;
        $category_print->title_en=$request->title_en;
        $category_print->subtitle_ar=$request->subtitle_ar;
        $category_print->subtitle_en=$request->subtitle_en;
        $category_print->describe_ar=$request->describe_ar;
        $category_print->describe_en=$request->describe_en;
        $category_print->parent_id=$request->parent_id;
        $category_print->design=$request->design;

        $category_print->save();

        if ($request->hasfile('image')) {
            $images = $request->file('image');
            foreach ($images as $image) {
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $image_name = $timestamp . $image->getClientOriginalName();
                $image->move(public_path('/uploads'), $image_name);
                $image = $image_name;
                ImageCategoryPrint::create([
                    'category_print_id' => $category_print->id,
                    'image' => $image,
                ]);
            }
        }

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
        $category_prints=Category_print::where('parent_id',null)->get();
        $category_print=Category_print::find($id);
        return view('dashboard.print.update-category',compact('category_print','category_prints'));
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
            'title_ar' => 'required|string|unique:category_prints,title_ar,'.$id,
            'title_en' => 'required|string|unique:category_prints,title_en,'.$id,
            'subtitle_ar' => 'required|string',
            'subtitle_en' => 'required|string',
            'describe_ar' => 'required|string',
            'describe_en' => 'required|string',
            'image' => 'nullable',
            'parent_id' => 'nullable',
        ]);

        $category_print=Category_print::find($id);
        $category_print->title_ar=$request->title_ar;
        $category_print->title_en=$request->title_en;
        $category_print->subtitle_ar=$request->subtitle_ar;
        $category_print->subtitle_en=$request->subtitle_en;
        $category_print->describe_ar=$request->describe_ar;
        $category_print->describe_en=$request->describe_en;
        $category_print->parent_id=$request->parent_id;
        $category_print->design=$request->design;
        $category_print->save();

        if ($request->hasfile('image')) {
            $exsitImage = ImageCategoryPrint::where('category_print_id', $category_print->id)->get();
            $filePath = public_path('/uploads/');
            foreach ($exsitImage as $exsitImg) {
                if (file_exists($filePath . $exsitImg->image)) {
                    unlink($filePath . $exsitImg->image);
                }
            }

            ImageCategoryPrint::where('category_print_id', $category_print->id)->delete();

            $images = $request->file('image');
            foreach ($images as $image) {
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $image_name = $timestamp . $image->getClientOriginalName();
                $image->move(public_path('/uploads/'), $image_name);
                $image = $image_name;
                ImageCategoryPrint::create([
                    'category_print_id' => $category_print->id,
                    'image' => $image,
                ]);
            }
        }
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

    public function category_print_delete(Request $request)
    {
        $id=$request->category_id;
        $category_print=Category_print::find($id);
        $category_print->delete();
        alert()->success('رسالة نجاح', 'تم  حفظ البيانات  بنجاح');
        return \Redirect::back();
    }

}
