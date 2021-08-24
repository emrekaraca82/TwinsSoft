<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AyarlarController;
use App\Http\Controllers\Admin\KurumsalController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ContentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('ayarlar-genel', [AyarlarController::class, 'genel_ayarlar']);
Route::PUT('ayarlar-genel/{id}/update', [AyarlarController::class, 'update'])->name('update');

Route::get('ayarlar-iletisim', [AyarlarController::class, 'iletisim_ayarlar']);
Route::PUT('ayarlar-iletisim/{id}/update', [AyarlarController::class, 'update'])->name('update');

Route::get('ayarlar-api', [AyarlarController::class, 'api_ayarlar']);
Route::PUT('ayarlar-api/{id}/update', [AyarlarController::class, 'update'])->name('update');

Route::get('ayarlar-medya', [AyarlarController::class, 'medya_ayarlar']);
Route::PUT('ayarlar-medya/{id}/update', [AyarlarController::class, 'update'])->name('update');

Route::get('ayarlar-mail', [AyarlarController::class, 'mail_ayarlar']);
Route::PUT('ayarlar-mail/{id}/update', [AyarlarController::class, 'update'])->name('update');

Route::get('kurumsal', [KurumsalController::class, 'index']);
Route::PUT('kurumsal/{id}/update', [KurumsalController::class, 'update'])->name('update');

//slider
route::get('slider/{id}',[SliderController::class, 'destroy'])->whereNumber('id')->name('slider.destroy');
Route::resource('slider',SliderController::class);

//content
route::get('content/{id}',[ContentController::class, 'destroy'])->whereNumber('id')->name('content.destroy');
Route::resource('content',ContentController::class);
