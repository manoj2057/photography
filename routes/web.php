<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogdetailsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\MemberdetailsController;
use App\Http\Controllers\PdflistingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SinglepageController;
use App\Http\Controllers\TeamController;
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
Route::get('/Blog', [BlogController::class, 'blog']);
Route::get('/Blogdetails', [BlogdetailsController::class, 'blogdetails']);
Route::get('/gallery', [GalleryController::class, 'gallery']);
Route::get('/contactus', [ContactusController::class, 'contactus']);
Route::get('/memberdetail', [MemberdetailsController::class, 'memberdetails']);
Route::get('/memberlisting', [MemberlistingController::class, 'memberlisting']);
Route::get('/pdf', [PdflistingController::class, 'pdflisting']);
Route::get('/search', [SearchController::class, 'search']);
Route::get('/singlepage', [SinglepageController::class, 'singlepage']);
Route::get('/team', [TeamController::class, 'team']);