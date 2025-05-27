<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SettingController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/admin/pages', PageController::class);
Route::get('/pages/{page:slug}', [PageController::class, 'show'])->name('pages.show');
Route::get('/admin/settings', [SettingController::class, 'index'])->name('admin.settings.index');
