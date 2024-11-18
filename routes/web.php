<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ContactController;

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
Route::redirect('/', '/fr');

Route::group(['prefix' => '{language}' ], function(){

    /* Route::get('/', function () {
        return view('index');
    })->name('accueil'); */
    Route::get('/', [AccueilController::class, 'index'])->name('accueil');
    Route::post('/', [AccueilController::class, 'storeEmail'])->name('accueil');

    Route::get('/apropos', function () {
        return view('apropos');
    })->name('apropos');

    Route::get('/services', function () {
        return view('services');
    })->name('services');

    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('store');

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


});