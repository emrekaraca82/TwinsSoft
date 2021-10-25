<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kurumsal;
use Illuminate\Support\Str;
use File;


class KurumsalController extends Controller
{
  
    public function index()
    {
        $kurumsal = Kurumsal::find(1) ?? abort(404,'Sayfa Bulunamadı');        
        return view("admin.kurumsal.index",compact('kurumsal'));
    }

    public function update(Request $request)
    {
        if($request->hasFile('kurumsalGorsel'))
        {
            $fileName = Str::slug($request->kurumsalBaslik).'.'.$request->kurumsalGorsel->extension();     
            $fileNameWithUpload = 'uploads/kurumsal/'.$fileName;
            if(File::exists($fileNameWithUpload))
            {
                File::delete($fileNameWithUpload);
            }
            $request->kurumsalGorsel->move(public_path('uploads/kurumsal/'),$fileName);
            $request->merge([
                'kurumsalGorsel'=>$fileNameWithUpload
            ]);       
        }
        Kurumsal::find(1)->first()->update($request->post());    
        return redirect()->route("kurumsal.index")->with('success', 'Güncelleme İşlemi Başarılı');      
    }

}
