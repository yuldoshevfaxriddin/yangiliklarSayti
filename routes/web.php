<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\YangilikController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/category', function () {
    return view('category');
})->name('category');
Route::get('/region', function () {
    return view('region');
})->name('region');
Route::get('/single-news', function () {
    return view('single-news');
})->name('single-news');


// Admin panel

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin-home');

Route::get('admin/category-add',[CategoryController::class,'index'])->name('admin-category');
Route::post('admin/category-add',[CategoryController::class,'store'])->name('admin-category');
Route::get('admin/category-add/edit',[CategoryController::class,'show'])->name('admin-category-edit');
Route::post('admin/category-add/edit',[CategoryController::class,'edit'])->name('admin-category-edit');

Route::get('admin/region-add',[RegionController::class,'index'])->name('admin-region');
Route::post('admin/region-add',[RegionController::class,'store'])->name('admin-region');
Route::get('admin/region-add/edit',[RegionController::class,'show'])->name('admin-region-edit');
Route::post('admin/region-add/edit',[RegionController::class,'edit'])->name('admin-region-edit');

Route::get('admin/news-add',[YangilikController::class,'index'])->name('admin-news');
Route::post('admin/news-add',[YangilikController::class,'store'])->name('admin-news');
Route::get('admin/news-add/edit',[YangilikController::class,'show'])->name('admin-news-edit');
Route::post('admin/news-add/edit',[YangilikController::class,'edit'])->name('admin-news-edit');