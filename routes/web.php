<?php

use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Brand\Index;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard.index');

    //category routes
    Route::controller(CategoryController::class)->name('category.')->group(function(){
        Route::get('category', 'index')->name('index');
        Route::get('caetgory/create','create')->name('create');
        Route::post('category/store', 'store')->name('store');
        Route::get('category/{category}/edit', 'edit')->name('edit');
        Route::put('category/{category}/update', 'update')->name('update');
    });

    Route::get('/brand',App\Livewire\Admin\Brand\Index::class);


});
