<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogdetailsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\MemberdetailsController;
use App\Http\Controllers\PdflistingController;
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
Route::get('/home', [HomeController::class, 'index']);
Route::get('/Blog', [BlogController::class, 'index']);
Route::get('/Blogdetails', [BlogdetailsController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/contactus', [ContactusController::class, 'index']);
Route::get('/memberdetail', [MemberdetailsController::class, 'index']);
Route::get('/memberlisting', [MemberlistingController::class, 'index']);
Route::get('/pdf', [PdflistingController::class, 'index']);