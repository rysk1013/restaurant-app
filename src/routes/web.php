<?php

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

Route::get('/', function () {
    return view('top');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

// 管理ユーザ
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/top', function () {
        return view('admin.top');
    })->middleware(['auth:admin', 'verified'])->name('top');

    require __DIR__.'/admin.php';
});

// メニュー管理
Route::get('/admin/menu', [App\Http\Controllers\Admin\Menu\MenusController::class, 'index'])
    ->name('menu.index');
Route::get('/admin/menu/renderList', [App\Http\Controllers\Admin\Menu\MenusController::class, 'renderList'])
    ->name('menu.renderList');

// お問い合わせ
Route::get('/contact/index', [App\Http\Controllers\Contact\ContactController::class, 'index'])
    ->name('contact.index');
Route::post('/contact/confirm', [App\Http\Controllers\Contact\ContactController::class, 'confirm'])
    ->name('contact.confirm');
Route::post('/contact/done', [App\Http\Controllers\Contact\ContactController::class, 'done'])
    ->name('contact.done');
