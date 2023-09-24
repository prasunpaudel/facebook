<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [SiteController::class, 'index'])->name('home');
Route::post('/createPost',[SiteController::class,'createPost'])->name('createPost');
Route::get('/displayPost',[SiteController::class,'displayPost'])->name('displayPost');
