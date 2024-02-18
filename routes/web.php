<?php

use App\Http\Middleware\AdminAuthorized;
use App\Http\Middleware\AdminAuthorizedCompleted;
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

Route::middleware(AdminAuthorized::class)->group(function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/billing', function () {
        return view('admin.billing');
    });
});
Route::middleware(AdminAuthorizedCompleted::class)->group(function(){
    Route::get('/admin-approve', function () {
        return view('waiting-admin-approve');
    });
});
