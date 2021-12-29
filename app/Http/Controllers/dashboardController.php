<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Validator;
use Exception;
use App\Models\Category_translation;
class dashboardController extends Controller
{
    public $path = 'dashboard.';
    public function dashboard()
    {
        $setting = Setting::first();

        return view('dashboard.dashboard', compact('setting'));
    }

    public function profile()
    {
        $user = auth()->user();
        return view($this->path . 'profile', compact('user'));
    }

    public function changePassword()
    {
        $user = auth()->user();
        return view($this->path . 'update-password', compact('user'));
    }

    public function saveProfile(Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'email' => 'required|string|email|unique:users,email,' . $id,

            'name' => 'required|string|min:3|max:100',

        ], [
            'required' => 'هذا الحقل مطلوب',
            'email' => 'من فضلك ادخل ايميل صحيح',
            'unique' => 'هذا الحقل موجود مسبقا',
            'name.min' => 'يجب الا يقل الاسم عن 3 أحرف',
            'name.max' => 'يجب الا يزيد الاسم عن 20 أحرف',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        alert()->success('رسالة نجاح', 'تم تعديل البيانات بنجاح');
        return redirect()->back();
    }

    public function changePasswordSave(Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|min:6|confirmed',
        ], [
            'required' => 'هذا الحقل مطلوب',
            'min' => 'يجب أن تكون كلمة السر أكبر من أو تساوي 6 أحرف',
            'confirmed' => 'يجب تأكيد كلمة المرور',
        ]);

        if (Hash::check($request->oldpassword, $user->password)) {
            $user->update([
                'password' => Hash::make($request->password),
            ]);
            alert()->success('رسالة نجاح', 'تم تحديث كلمة مرور الادمن بنجاح');
        } else {
            alert()->error('رسالة خطأ', 'عدم تطابق كلمة السر القديمة');
        }
        return redirect()->back();
    }
    public function word_count()
    {

        $source = public_path('files/file.docx');

        $phpword = \PhpOffice\PhpWord\IOFactory::load($source);

        $sections = $phpword->getSections();

        $uploadedText = '';

        foreach ($sections as $section) {
            $elements = $section->getElements();
            foreach ($elements as $element) {
                if (get_class($element) === 'PhpOffice\PhpWord\Element\Text') {
                    $uploadedText .= $element->getText();
                    $uploadedText .= ' ';
                } else if (get_class($element) === 'PhpOffice\PhpWord\Element\TextRun') {
                    $textRunElements = $element->getElements();
                    foreach ($textRunElements as $textRunElement) {
                        $uploadedText .= $textRunElement->getText();
                        $uploadedText .= ' ';
                    }
                } else if (get_class($element) === 'PhpOffice\PhpWord\Element\TextBreak') {
                    $uploadedText .= ' ';
                } else {
                    throw new Exception('Unknown class type ' . get_class($e));
                }
            }
        }

        $uploadedText = str_replace('&nbsp;', "", $uploadedText);
        $uploadedText = str_replace('•', "", $uploadedText);
        $uploadedText = preg_split('/\s+/', $uploadedText);

        $numberWords = count($uploadedText);

       return $numberWords - 1;

    }
    public function pdf_count()
    {
        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $parser->parseFile("../public/files/file.pdf");

        $text = $pdf->getText();
        $text = trim($text);
        $text = preg_replace('/\d/', '', $text);
        $text = strtolower($text);
        $text = preg_replace('/[[:punct:]]/', ' ', $text);

        $count_pdf = str_word_count($text);
        return $count_pdf;

    }
    public function test(){
        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $parser->parseFile("../public/file.pdf");

        $text = $pdf->getText();
        $text = trim($text);
        $text = preg_replace('/\d/', '', $text);
        $text = strtolower($text);
        $text = preg_replace('/[[:punct:]]/', ' ', $text);

        $count_pdf = str_word_count($text);
        return $count_pdf;
    }
    public function count_file(Request $request){
        try{
        $arr=array();
        if($request->hasFile('file')){
            $arr=array('file' => 'required|mimes:docx,pdf',
            'number' => 'nullable|integer');
        }elseif($request->number){
            $arr=array('file' => 'nullable|mimes:docx,pdf',
            'number' => 'required|integer');
        }else{
            $arr=array('file' => 'required|mimes:docx,pdf',
            'number' => 'required|integer');
        }
        
        $request->validate($arr);

        $count=0;
        if ($request->hasFile('file')) {
            if ($request->file('file')->isValid()) {
                $file=$request->file('file');
                $extension=$file->getClientOriginalExtension();
                $image_name = 'file.' . $file->getClientOriginalExtension();
                $file->move(public_path('files'), $image_name);
               if($extension=='pdf'){
                $count=$this->pdf_count();
               }elseif( $extension=='docx'){
                $count=$this->word_count();
               }
              
            }
        }else if( $request->number){
            // $count=$request->number;
            $count=$request->number;
        }
        $price=$count*1;
        $phone=Setting::first()->phone;
        $translation= Category_translation::find($request->id);
        // return back()->with();
        return redirect(route('translate.service.count',[$request->id,$price]));
        // return view('front.pages.translate_service',compact('phone','price','translation'));
        } catch (Exception $e) {
            $price=0;
            $error_excption='الملف يمتلك محتوي غير صالح مثل (الاكواد و الايكون)';
            $phone=Setting::first()->phone ?? '';
            $translation= Category_translation::find($request->id);
            return view('front.pages.translate_service',compact('phone','price','translation','error_excption'));
    }
    }
}
