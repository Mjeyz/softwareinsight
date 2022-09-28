<?php

use App\Http\Controllers\HomeContactUsController;
use App\Http\Controllers\NewsletterController;
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
    return view('home');
});


Route::post('/contact', [HomeContactUsController::class, 'contactPost'])->name('contact');
Route::post('newsletter/store', [NewsletterController::class, 'store']);
Route::get('/services', function (){
    return view('services');
});