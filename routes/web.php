<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



//Route::get('/p/create', function () {
//    return view('posts.create');
//});

//Route::post('/p', function () {
//    return view('store');
//});


//Route::post('follow/{user}', function () {
//    return ['success'];
//});

Route::post('follow/{user}', [App\Http\Controllers\FollowController::class, 'store']);

Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create']);

Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show']);

Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('home.show');

Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');

Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');