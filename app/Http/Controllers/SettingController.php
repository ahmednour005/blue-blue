<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    


    public function add_setting(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'phone' => 'required|min:0|numeric',
            'address' => 'required',
        ]);

        $setting=Setting::first();
        $setting->email=$request->email;
        $setting->phone=$request->phone;
        $setting->address=$request->address;
        $setting->save();
        alert()->success('رسالة نجاح', 'تم التعديل  بنجاح');
        return \Redirect::back();

    }

    
}
