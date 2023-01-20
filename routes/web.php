<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TicketController;
use App\Models\ticket;
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
    return view('index');
});

Route::get('/ticket', [TicketController::class, 'index'])->name('ticket');
Route::post('/post-ticket', [TicketController::class, 'store'])->name('post-ticket');

Route::get('/login', [AdminController::class, 'index'])->name('login');
Route::get('/post-login', [AdminController::class, 'authenticate'])->name('post-login');