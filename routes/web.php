<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TechnologyController;
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

Route::get('/login',function() {return view('auth.login');})->name('auth.login');
Route::get('/register',function() {return view('auth.register');})->name('auth.register');

Route::get('/',[HomeController::class,'index'])->name('home');

Route::group(['prefix'=>'user'],function() {
    Route::prefix('categories')->group(function() {
        Route::get('/',[CategoryController::class,'getAll'])->name('category.index');
        Route::post('/store',[CategoryController::class,'store'])->name('category.store');
        Route::get('/{id}',[CategoryController::class,'findById'])->name('category.findById');
        Route::post('/{id}/delete',[CategoryController::class,'delete'])->name('category.delete');
    });

    Route::prefix('news')->group(function() {
        Route::get('/',[NewsController::class,'getNews'])->name('news.news');
        Route::get('/hot',[NewsController::class,'getHotNews'])->name('news.hot');
        Route::post('/store',[NewsController::class,'store'])->name('news.store');
        Route::get('/{id}',[NewsController::class,'findById'])->name('news.findById');
        Route::post('/{id}/delete',[NewsController::class,'delete'])->name('news.delete');
    });

    Route::prefix('technologies')->group(function() {
        Route::get('/',[TechnologyController::class,'getAll'])->name('tech.index');
        Route::post('/store',[TechnologyController::class,'store'])->name('tech.store');
        Route::get('/category/{id}',[TechnologyController::class,'findByCategory'])->name('tech.category');
        Route::get('/{id}',[TechnologyController::class,'findById'])->name('tech.findById');
    });

});
