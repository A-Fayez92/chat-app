<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\ChatController;
use App\Http\Controllers\Auth\BlockController;
use App\Http\Controllers\Auth\SessionController;

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

Route::post('getFriends', [App\Http\Controllers\HomeController::class, 'getFriends']);

Route::post('/session/create', [App\Http\Controllers\Auth\SessionController::class, 'create']);
Route::post('/session/{session}/chats', [App\Http\Controllers\Auth\ChatController::class, 'chats']);


Route::post('/send/{session}', [App\Http\Controllers\Auth\ChatController::class, 'send']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
