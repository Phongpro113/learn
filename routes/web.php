<?php

use App\Http\Controllers\Admin\AddController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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

Route::get('login', [loginController::class, 'login'])->name('login');
Route::post('login', [loginController::class, 'processLogin'])->name('processLogin');

Route::prefix('admin')->group(function (){
    Route::get('gas-station', [HomeController::class, 'home'])->name('admin.home');
    Route::get('add', [AddController::class, 'add'])->name('admin.add');
});
