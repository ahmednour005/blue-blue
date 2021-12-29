<?php

if (! function_exists('active_link')) {
    function active_link($link = null) {
        if(Request::is($link)){
            return 'menuitem-active';
        }
    }
}

if (! function_exists('active_menu')) {
    function active_menu($link = null) {
        if(Request::is($link)){
            return 'current';
        }
    }
}

if (! function_exists('option_select')) {
    function option_select($current,$item_id) {
        if($current==$item_id){
            return 'selected';
        }
    }
}

if (! function_exists('option_radio')) {
    function option_radio($current,$item_id) {
        if($current===$item_id){
            return 'checked';
        }
    }
}

if(!function_exists('admin_url')) {
    function admin_url($url = null)
    {
        return url('admin/' . $url);
    }
}

if(!function_exists('get_boolean_string')) {
    function get_boolean_string($value)
    {
        if($value==1){
            return 'Yes';
        }else{
            return 'No';
        }
    }
}

if(!function_exists('get_lang')) {
    function get_lang()
    {
        $lang=Session()->get('lang');
        if($lang){
            App()->setLocale('en');
            return $lang;
        }else{
            App()->setLocale('ar');
            return 'ar';
        }
               
    }
}


if(!function_exists('get_dashboard')) {
    function get_dashboard()
    {
         if(auth()->user()->role_id==1){
            return 'admin.dashboard';
        }else if(auth()->user()->role_id==2){
            return 'station.dashboard';
        }
        else if(auth()->user()->role_id==3){
            return 'employer.dashboard';
        }else if(auth()->user()->role_id==4){
            return 'company.dashboard';
        }else if(auth()->user()->role_id==5){
            return 'accountant.dashboard';
        }else if(auth()->user()->role_id==6){
            return 'manager.dashboard';
        }else if(auth()->user()->role_id==7){
            return 'regional_accountant.dashboard';
        }
               
    }
}






?>