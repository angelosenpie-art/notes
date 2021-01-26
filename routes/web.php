<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\LogoutController;
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
    })->name('home');

  Route::get('/profile',[ProfileController::class, 'index'])
  ->name('profile')
  ->middleware('auth');
  Route::get('/notes/trash', 'NoteController@trash')->name('notes.trash');
  Route::get('/notes/modal', 'NoteController@modal')->name('notes.modal');
  Route::get('/notes/trash/restore/{note}', 'NoteController@trashRestore')->name('notes.trashRestore');
  Route::resource('/notes', 'NoteController');

  Route::post('/logout',[LogoutController::class, 'store'])->name('logout');
  Route::get('/author',[AuthorController::class, 'index'])->name('author');


  Route::get('/login',[LoginController::class, 'index'])->name('login');
  Route::post('/login', [LoginController::class, 'store']);

  Route::get('/register',[RegisterController::class, 'index'])->name('register')->middleware('guest');
  Route::post('/register', [RegisterController::class, 'store']);