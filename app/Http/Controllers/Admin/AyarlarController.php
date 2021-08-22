<?php

namespace App\Http\Controllers\Admin;
use App\Models\Ayar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AyarlarController extends Controller
{   

    public function update(Request $request,$id)
    {
        $genelayar = Ayar::find($id) ?? abort(404,'Sayfa bulunamadı');
        Ayar::where('id',$id)->update($request->except(['_method','_token']));
        return redirect()->route("dashboard")->withSuccess('Başarılı');
    }

    public function genel_ayarlar()
    {
        $genelayar = Ayar::get() ?? abort(404,'Sayfa bulunamadı');
        return view("admin.ayarlar.genel-ayarlar",compact('genelayar'));
    }

    public function iletisim_ayarlar()
    {
        $genelayar = Ayar::get();
        return view("admin.ayarlar.iletisim-ayarlar",compact('genelayar'));
    }

    public function api_ayarlar()
    {
        $genelayar = Ayar::get();
        return view("admin.ayarlar.api-ayarlar",compact('genelayar'));
    }

    public function medya_ayarlar()
    {
        $genelayar = Ayar::get();
        return view("admin.ayarlar.medya-ayarlar",compact('genelayar'));
    }

    public function mail_ayarlar()
    {
        $genelayar = Ayar::get();
        return view("admin.ayarlar.mail-ayarlar",compact('genelayar'));
    }
}
