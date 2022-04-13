<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Models\Event;

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
Route::get('/', function() { return view('index');});
Route::get('/current', function() { return view('current');});
Route::get('/past', function() { return view('past');});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::name('events')->group(function(){
    Route::get('/events', [EventController::class, 'index'])->name('.index');
    Route::get('/events/create', [EventController::class, 'create'])->name('.create');
    Route::get('/events/{id}', [EventController::class, 'show'])->name('.show');
    Route::post('/events', [EventController::class, 'store'])->name('.store');
    Route::put('events/{id}', [EventController::class, 'update'])->name('.update'); 
    Route::get('events/{id}/edit', [EventController::class, 'edit'])->name('.edit');
    Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('.destroy');
});


Route::get('events/{id}/suscribe', [UserController::class, 'subscribe'])->name('subscribe');
