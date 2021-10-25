<?php

namespace App\Http\Controllers\Admin;
use App\Models\Ayar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AyarlarController extends Controller
{   

    public function ayarupdate(Request $request)
    {     
        Ayar::where('id',1)->update($request->except(['_method','_token']));   
        return redirect()->route("dashboard")->with('success', 'Güncelleme İşlemi Başarılı');
    }

    public function genel_ayarlar()
    {
        $ayar = Ayar::first() ?? abort(404,'Sayfa bulunamadı');
        return view("admin.ayarlar.genel-ayarlar",compact('ayar'));
    }

    public function iletisim_ayarlar()
    {
        $ayar = Ayar::first()?? abort(404,'Sayfa bulunamadı');
        return view("admin.ayarlar.iletisim-ayarlar",compact('ayar'));
    }

    public function api_ayarlar()
    {
        $ayar = Ayar::first()?? abort(404,'Sayfa bulunamadı');
        return view("admin.ayarlar.api-ayarlar",compact('ayar'));
    }

    public function medya_ayarlar()
    {
        $ayar = Ayar::first()?? abort(404,'Sayfa bulunamadı');
        return view("admin.ayarlar.medya-ayarlar",compact('ayar'));
    }

    public function mail_ayarlar()
    {
        $ayar = Ayar::first()?? abort(404,'Sayfa bulunamadı');
        return view("admin.ayarlar.mail-ayarlar",compact('ayar'));
    }
}
