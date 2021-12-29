<?php

use App\Http\Controllers\front\PagesController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\CategoryprintController;
use App\Http\Controllers\CategorytranslationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TestmonialController;
use App\Models\Testmonial;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::get('/', [PagesController::class,'index'])->name('home');
        Route::get('about',[PagesController::class,'about'])->name('about');
        Route::get('contact',[PagesController::class,'contact'])->name('contact');
        Route::get('print',[PagesController::class,'print_index'])->name('print.index');
        Route::get('print/category-services/',[PagesController::class,'print_category_service'])->name('print.category_service');
        Route::get('print/services/{id}',[PagesController::class,'print_service'])->name('print.service');
        Route::get('print/service-details/{id}',[PagesController::class,'print_service_details'])->name('print.service_details');
        Route::get('translate',[PagesController::class,'translate_index'])->name('translate.index');
        Route::get('translate/services/{id}',[PagesController::class,'translate_service'])->name('translate.service');
        Route::get('translate/services/{id}/{price}',[PagesController::class,'translate_service2'])->name('translate.service.count');

        Route::get('/test', [dashboardController::class, 'test']);
        Route::get('/contacts/all', [ContactController::class, 'index'])->name('contacts.index');

        Route::delete('/contacts/delete/{id}', [ContactController::class, 'destroy'])->name('contacts.print.delete');
        Route::get('/askdesign', [PagesController::class, 'askdesign'])->name('askdesign.print');


        Route::Post('/count', [dashboardController::class, 'count_file'])->name('count-file');

    });
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts_form.store');


Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);


Route::group(['middleware' => 'auth'], function () {
Route::get('profile', [dashboardController::class, 'profile'])->name('myprofile');
Route::get('change-password', [dashboardController::class, 'changePassword'])->name('change-password');
Route::put('profile/{id}', [dashboardController::class, 'saveProfile'])->name('updateprofile');
Route::put('profile/password/{id}', [dashboardController::class, 'changePasswordSave'])->name('updatepassword');


Route::put('profile/password/{id}', [dashboardController::class, 'changePasswordSave'])->name('updatepassword');

Route::get('admin/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');

Route::resource('category-print',CategoryprintController::class);
Route::delete('category-print-delete', [CategoryprintController::class, 'category_print_delete'])->name('category.print.delete');

Route::resource('category-translation',CategorytranslationController::class);
Route::delete('category-translation-delete', [CategorytranslationController::class, 'category_translation_delete'])->name('category.translation.delete');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('add-setting',[SettingController::class, 'add_setting'])->name('setting.add-setting');

Route::resource('testmonial',TestmonialController::class);

});
