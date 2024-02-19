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

Route::middleware(['auth' ,AdminAuthorized::class])->group(function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::prefix('/transaction')->group(function()  {
        Route::get('/customer', function () {
            return view('admin.customer');
        });
        Route::get('/quotation', function () {
            return view('admin.quotation');
        });
        Route::get('/delivery', function () {
            return view('admin.delivery');
        });
        Route::get('/invoice', function () {
            return view('admin.invoice');
        });
        Route::get('/purchase', function () {
            return view('admin.purchase');
        });
        Route::get('/expense', function () {
            return view('admin.expense');
        });
        Route::get('/cash-flow', function () {
            return view('admin.cash-flow');
        });
        Route::get('/sale-closing', function () {
            return view('admin.sale-closing');
        });
    });
    Route::get('/billing', function () {
        return view('admin.billing');
    });
    Route::get('/report', function () {
        return view('admin.report');
    });

    Route::prefix('/setting')->group(function(){
        Route::get('/user', function () {
            return view('admin.user');
        });
        Route::get('/role', function () {
            return view('admin.role');
        });
    });

});
Route::middleware(['auth', AdminAuthorizedCompleted::class])->group(function(){
    Route::get('/admin-approve', function () {
        return view('waiting-admin-approve');
    });
});
