<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/thread/{thread}', [ThreadController::class, 'index'])->name('thread.index');
Route::get('/topic/{topic}', [TopicController::class, 'index'])->name('topic.index');

Route::middleware(['auth'])->group(function () {

    Route::middleware(['is_admin'])->group( function() {
        Route::get('/users', [ UserController::class, 'index'])->name('user.index');
        
    });

    Route::get('/profile', [ UserController::class, 'edit' ])->name('profile.edit');
    Route::patch('/profile', [ UserController::class, 'update' ])->name('profile.update');
    Route::patch('/profile/password', [ UserController::class, 'updatePassword'])->name('profile.update.password');
});
