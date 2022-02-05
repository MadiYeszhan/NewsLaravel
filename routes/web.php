<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Middleware\CheckAuthor;

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

Auth::routes();
Route::get('/', [NewsController::class,'index'])->name('news.index');
Route::get('/{news}', [NewsController::class,'show'])->name('news.show');
Route::resource('news', NewsController::class)->only([
    'create', 'store','update','edit','destroy'
])->middleware(CheckAuthor::class);


