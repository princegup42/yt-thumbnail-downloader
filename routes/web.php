<?php

use App\Http\Controllers\ThumbnailController;
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

Route::get('/', [ThumbnailController::class, 'index_rel_link']);

Route::get('youtube-thumbnail-downloader', [ThumbnailController::class, 'index_rel_link'])->name('thumbnail');

Route::post('youtube-thumbnail-downloader', [ThumbnailController::class, 'store'])->name('thumbnail-download');