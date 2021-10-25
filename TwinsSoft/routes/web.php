<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AyarlarController;
use App\Http\Controllers\Admin\KurumsalController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\MenuController;

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
Route::PUT('ayarlar-genel/update', [AyarlarController::class, 'ayarupdate'])->name('ayarupdate');

Route::get('ayarlar-iletisim', [AyarlarController::class, 'iletisim_ayarlar']);
Route::PUT('ayarlar-iletisim/update', [AyarlarController::class, 'ayarupdate'])->name('ayarupdate');

Route::get('ayarlar-api', [AyarlarController::class, 'api_ayarlar']);
Route::PUT('ayarlar-api/update', [AyarlarController::class, 'ayarupdate'])->name('ayarupdate');

Route::get('ayarlar-medya', [AyarlarController::class, 'medya_ayarlar']);
Route::PUT('ayarlar-medya/update', [AyarlarController::class, 'ayarupdate'])->name('ayarupdate');

Route::get('ayarlar-mail', [AyarlarController::class, 'mail_ayarlar']);
Route::PUT('ayarlar-mail/update', [AyarlarController::class, 'ayarupdate'])->name('ayarupdate');

Route::get('kurumsal/', [KurumsalController::class, 'index'])->name('kurumsal.index');
Route::PUT('kurumsal/update', [KurumsalController::class, 'update'])->name('update');

//slider
route::get('slider/{id}',[SliderController::class, 'destroy'])->whereNumber('id')->name('slider.destroy');
Route::resource('slider',SliderController::class);

//content
route::get('content/{id}',[ContentController::class, 'destroy'])->whereNumber('id')->name('content.destroy');
Route::resource('content',ContentController::class);
