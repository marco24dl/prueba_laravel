<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TagController;

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
    return view('dashboard');
});

Route::get('tags',[TagController::class,'index'])->name('tags.index');
Route::get('tags/create',[TagController::class,'create'])->name('tags.create');
Route::get('tags/{tag}',[TagController::class,'show'])->name('tags.show');
Route::post('tags',[TagController::class,'store'])->name('tags.store');
Route::get('tags/{tag}/edit',[TagController::class,'edit'])->name('tags.edit');
Route::put('tags/{tag}',[TagController::class,'update'])->name('tags.update');
Route::delete('tags/{tag}',[TagController::class,'destroy'])->name('tags.destroy');

