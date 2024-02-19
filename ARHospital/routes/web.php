<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
})->name('home');
Route::get('/contacts',function(){
    return view('frontend.contact');
})->name('contacts');

Route::get('/blogs',function(){
    return view('frontend.blog');
})->name('blogs');
Route::get('/blogs/details',function(){
    return view('frontend.blog-detail');
})->name('blog-detail');


Route::get('/change-language/{locale}',[LanguageController::class,'changeLanguage'])->name('changeLanguage');
