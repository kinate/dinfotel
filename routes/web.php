<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
    return view('index');
});

Route::get('index', function () {return view('index');});
Route::get('about', function () {return view('about');});
Route::get('services', function () {return view('service');});
Route::get('gallery', function () {return view('gallery');});
Route::get('contact', function () {return view('contact');});

Route::post('submit_enquiry',[PageController::class, 'submit_enquiry']);



