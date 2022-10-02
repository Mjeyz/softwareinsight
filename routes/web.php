<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeContactUsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TechnologiesController;
use App\Http\Middleware\CheckStatus;
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
Route::get('/services-page', function (){
    return view('services-page');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::post('/contact', [HomeContactUsController::class, 'contactPost'])->name('contact');
Route::post('newsletter/store', [NewsletterController::class, 'store']);

Route::get('services/{service}', [ServicesController::class, 'PublicShow']);
Route::get('technologies/{technology}', [TechnologiesController::class, 'PublicShow']);
Route::get('pages/{page}', [pagesController::class, 'PublicShow']);


Route::middleware([CheckStatus::class])->group(function () {
    // Services Section
    Route::get('siteadmin/services', [ServicesController::class, 'index']); // method to view all services at once
    Route::get('siteadmin/services/{service}', [ServicesController::class, 'show']); // method to show one service
    Route::delete('siteadmin/services/{service}', [ServicesController::class, 'destroy']); // method to delete a service
    Route::get('siteadmin/services/create/new', [ServicesController::class, 'create']); // method to call a view of create form
    Route::post('siteadmin/services/create/new', [ServicesController::class, 'store']); // method to post a new service
    Route::get('siteadmin/services/{service}/edit', [ServicesController::class, 'edit']); // method to show edit view to user
    Route::post('siteadmin/services/{service}/edit', [ServicesController::class, 'update']);  // method to post edit data from view form
    
    // Technologies section
    Route::get('siteadmin/technologies', [TechnologiesController::class, 'index']); // method to view all technologies at once
    Route::get('siteadmin/technologies/{technology}', [TechnologiesController::class, 'show']); // method to show one technology
    Route::delete('siteadmin/technologies/{technology}', [TechnologiesController::class, 'destroy']); // method to delete a technology
    Route::get('siteadmin/technologies/create/new', [TechnologiesController::class, 'create']); // method to call a view of create form
    Route::post('siteadmin/technologies/create/new', [TechnologiesController::class, 'store']); // method to post a new technology
    Route::get('siteadmin/technologies/{technology}/edit', [TechnologiesController::class, 'edit']); // method to show edit view to user
    Route::post('siteadmin/technologies/{technology}/edit', [TechnologiesController::class, 'update']);  // method to post edit data from view form
    
    // Pages section
    Route::get('siteadmin/pages', [PagesController::class, 'index']); // method to view all pages at once
    Route::get('siteadmin/pages/{page}', [PagesController::class, 'show']); // method to show one technology
    Route::delete('siteadmin/pages/{page}', [PagesController::class, 'destroy']); // method to delete a technology
    Route::get('siteadmin/pages/create/new', [PagesController::class, 'create']); // method to call a view of create form
    Route::post('siteadmin/pages/create/new', [PagesController::class, 'store']); // method to post a new technology
    Route::get('siteadmin/pages/{page}/edit', [PagesController::class, 'edit']); // method to show edit view to user
    Route::post('siteadmin/pages/{page}/edit', [PagesController::class, 'update']);  // method to post edit data from view form
});

// Authentication section
Route::get('siteadmin/dashboard', [AuthController::class, 'dashboard']); 
Route::get('siteadmin/login', [AuthController::class, 'index'])->name('login');
Route::post('siteadmin/custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('siteadmin/signout', [AuthController::class, 'signOut'])->name('signout');
