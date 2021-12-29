<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category_print;
use App\Models\Category_translation;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Testmonial;

class PagesController extends Controller
{
    public function index(){
        $print = Category_print::where('parent_id',null)->get();
        $translate = Category_translation::all();
        $info = Setting::first() ?? '';
        return view('home',compact('print','translate','info'));
    }
    public function about(){
        $testimonials=Testmonial::all();
        return view('front.pages.about',compact('testimonials'));
    }
    public function contact(){
        $info = Setting::first() ?? '';
        return view('front.pages.contact',compact('info'));
    }
    public function print_index(){
        $print = Category_print::where('parent_id',null)->get();
        $prints =Category_print::all();
        $sub_prints = Category_print::where('parent_id','!=',null)->get();
      
        return view('front.pages.print',compact('print','prints','sub_prints'));
    }
    public function print_category_service(){
        $print = Category_print::where('parent_id',null)->get();
        return view('front.pages.print_category_service',compact('print'));
    }
    public function print_service($id){
        $print_name = Category_print::find($id);
        if(!$print_name->children()->exists()){
            return redirect()->route('print.service_details',$id);
        }else{
            $print = Category_print::where('parent_id',$id)->get();
            return view('front.pages.print_service',compact('print','print_name'));
        }
    }
    public function print_service_details($id){
        $print_details = Category_print::find($id);
        $phone=Setting::first()->phone ?? '';
        return view('front.pages.print_service_details',compact('phone','print_details'));
    }
    public function translate_index(){
        $translate = Category_translation::all();
        return view('front.pages.translate_index',compact('translate'));
    }
    public function translate_service($id){
        $phone=Setting::first()->phone ?? '';
        $translation= Category_translation::find($id);
        $price =0;
        return view('front.pages.translate_service',compact('phone','price','translation'));
    }

    public function translate_service2($id,$price){
        $phone=Setting::first()->phone ?? '';
        $translation= Category_translation::find($id);

        return view('front.pages.translate_service',compact('phone','price','translation'));
    }
    public function askdesign(){
        $prints = Category_print::where('design',1)->get();
        return view('front.pages.print_design',compact('prints'));
    }

}
