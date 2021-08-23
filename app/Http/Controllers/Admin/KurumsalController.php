<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kurumsal;
use Illuminate\Support\Str;


class KurumsalController extends Controller
{
  
    public function index()
    {
        $kurumsalList = Kurumsal::get() ?? abort(404,'Sayfa bulunamadı');
        return view("admin.kurumsal.index",compact('kurumsalList'));
    }

    public function update(Request $request,$id)
    {
        if($request->hasFile('kurumsalGorsel')){
            $fileName = Str::slug($request->kurumsalBaslik).'.'.$request->kurumsalGorsel->extension();
            $fileNameWithUpload = 'uploads/'.$fileName;
            $request->kurumsalGorsel->move(public_path('uploads'),$fileName);
            $request->merge([
                'kurumsalGorsel'=>$fileNameWithUpload
            ]);       
        }
        Kurumsal::find($id)->first()->update($request->post());    
        return redirect()->route("dashboard")->withSuccess('Başarılı');
    }

}
