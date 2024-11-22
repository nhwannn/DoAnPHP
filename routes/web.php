<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);


Route::get('/detail', [HomeController::class, 'showDetail'])->name('layouts.detail');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
route::get('/quangcao', [HomeController::class,'quangCao'])->name('layouts.quangcao');
//danhmuc
Route::get('/admin/danhmuc/category', [AdminController::class, 'category'])->name('admin.danhmuc.category');
Route::get('/admin/danhmuc/addcategory',[AdminController::class,'add'])->name('admin.danhmuc.addcategory');
Route::get('/admin/danhmuc/editcategory', [AdminController::class, 'editcategory'])->name('admin.danhmuc.editcategory');
//donhang
Route::get('/admin/donhang/orders', [AdminController::class, 'orders'])->name('admin.donhang.orders');
Route::get('/admin/donhang/createorders', [AdminController::class, 'createorders'])->name('admin.donhang.createorders');
Route::get('/admin/donhang/editorders', [AdminController::class, 'editorders'])->name('admin.donhang.editorders');