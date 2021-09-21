<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contentList = Content::get() ?? abort(404,'Sayfa bulunamadı');
        return view('admin.content.index',compact('contentList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.create');     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('icerikGorsel')){
            $fileName = Str::slug($request->icerikBaslik).'.'.$request->icerikGorsel->extension();
            $fileNameWithUpload = 'uploads/content/'.$fileName;
            $request->icerikGorsel->move(public_path('uploads/content'),$fileName);
            $request->merge([
                'icerikGorsel'=>$fileNameWithUpload
            ]);
        }

        Content::create($request->post());
        return redirect()->route('content.index')->with('success', 'Ekleme İşlemi Başarılı'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = Content::find($id) ?? abort(404,'Quiz Bulunamadı');  
        return view('admin.content.edit',compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->hasFile('icerikGorsel')){
            $fileName = Str::slug($request->icerikBaslik).'.'.$request->icerikGorsel->extension();
            $fileNameWithUpload = 'uploads/content/'.$fileName;
            $request->icerikGorsel->move(public_path('uploads/content'),$fileName);
            $request->merge([
                'icerikGorsel'=>$fileNameWithUpload
            ]);
        }

        Content::find($id)->first()->update($request->post());
        return redirect()->route('content.index',$id)->with('success', 'Güncelleme İşlemi Başarılı');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Content::find($id)->delete();
        return redirect()->route('content.index')->with('success', 'İlgili Veri Silindi'); 
    }
}
