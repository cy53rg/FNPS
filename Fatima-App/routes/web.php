<?php

use Illuminate\Support\Facades\Route;


use App\Http\Livewire\Home\Pages\About;
use App\Http\Livewire\Home\Pages\Index;
use App\Http\Livewire\Home\Pages\Login;
use App\Http\Livewire\Home\Pages\Contact;
use App\Http\Livewire\Home\Pages\Gallery;
use App\Http\Livewire\Dashboard\Pages\User;
use App\Http\Livewire\Dashboard\Pages\Index as DashIndex;
use App\Http\Livewire\Dashboard\Pages\Contact as DashContact;
use App\Http\Livewire\Dashboard\Pages\Gallery as DashGallery;
use App\Http\Livewire\Dashboard\Pages\Staff;
use App\Http\Livewire\Dashboard\Pages\Parents;
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

Route::prefix('/')->name('home.')->group(function(){
    Route::get('/', Index::class)->name('index');
    Route::get('/about', About::class)->name('about');
    Route::get('/contact', Contact::class)->name('contact');
    Route::get('/login', Login::class)->name('login');
    Route::get('/gallery', Gallery::class)->name('gallery');
});
Route::prefix('/dashboard')->middleware('auth')->name('dash.')->group(function(){
    Route::get('/', DashIndex::class)->name('index');
    Route::get('/staff', Staff::class)->name('staff');
    Route::post('/staff', [Staff::class, 'save'])->name('addStaff');
    Route::get('/contact', DashContact::class)->name('contact');
    Route::get('/user', User::class)->name('users');
    Route::get('/gallery', DashGallery::class)->name('gallery');
    Route::get('/parentcomments', Parents::class)->name('parentsComments');
    Route::post('/parentcomments', [Parents::class, 'save'])->name('addComment');
});


