<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WriterController;

// use App\Http\Controllers\HomeController;
// use App\Models\Category;
// use App\Models\News;
// use App\Models\Writer;
// use Illuminate\Database\Query\IndexHint;

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

Auth::routes();

Route::get('/', function () {
    return redirect('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('news', [NewsController::class, 'index'])->name('news.index');
    Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('news/store', [NewsController::class, 'store'])->name('news.store');
    Route::get('news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('news/update/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('news/destroy/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

    Route::get('category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('writer', [WriterController::class, 'index'])->name('writer.index');
    Route::get('writer/create', [WriterController::class, 'create'])->name('writer.create');
    Route::post('writer/store', [WriterController::class, 'store'])->name('writer.store');
    Route::get('writer/edit/{id}', [WriterController::class, 'edit'])->name('writer.edit');
    Route::put('writer/update/{id}', [WriterController::class, 'update'])->name('writer.update');
    Route::delete('writer/destroy/{id}', [WriterController::class, 'destroy'])->name('writer.destroy');

    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


