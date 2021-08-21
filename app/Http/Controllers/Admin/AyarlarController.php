<?php

namespace App\Http\Controllers\Admin;
use App\Models\Ayar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AyarlarController extends Controller
{   
    public function genel_ayarlar()
    {
        $genelayar = Ayar::get();
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
