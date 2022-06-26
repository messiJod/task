<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CompanyController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
        // login route
        Route::get('login',[AdminController::class, 'create'])->name('login');
        Route::post('login',[AdminController::class, 'store'])->name('adminlogin');
    Route::middleware('admin')->group(function(){
        Route::get('/dashboard',[AdminController::class, 'index'])->name('dashboard');
//
//        Route::get('admin-test','HomeController@adminTest')->name('admintest');
//        Route::get('editor-test','HomeController@editorTest')->name('editortest');
//
//        Route::resource('posts','PostController');
//
    });
    Route::post('logout',[AdminController::class, 'destroy'])->name('logout');
});
route::resource('company', CompanyController::class);
route::resource('employee', EmployeeController::class);
//Route::get('',);
