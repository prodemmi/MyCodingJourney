<?php

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

Route::get('/', \App\Livewire\Home::class);
Route::get('/posts', \App\Livewire\Posts::class);
Route::get('/tags', \App\Livewire\Tags::class);
Route::get('/about', \App\Livewire\About::class);
Route::get('/donate', \App\Livewire\Donate::class);

Route::post('/donate', [\App\Http\Controllers\DonateController::class, 'donate']);

Route::get('/posts/{slug}', \App\Livewire\DetailPost::class);
Route::get('/ln/{short_link}', [\App\Http\Controllers\PostController::class, 'redirectShortLink']);

Route::post('/newsletters', [\App\Http\Controllers\NewsletterController::class, 'create']);
