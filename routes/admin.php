<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\VaccineController;
use App\Http\Controllers\Admin\PetTypeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AnnouncementController;

Route::resource('', AdminController::class)->only('index')->middleware('can:admin');
// Route::resource('tags', TagController::class)->names('admin.tags')->middleware('can:admin');
Route::resource('pets', PetController::class)->names('admin.pets')->middleware('can:admin');
Route::resource('posts', PostController::class)->names('admin.posts')->middleware('can:admin');
Route::resource('users', UserController::class) ->names('admin.users')->middleware('can:admin');
Route::resource('image', ImageController::class)->names('admin.image')->middleware('can:admin');
// Route::resource('vaccines', VaccineController::class)->names('admin.vaccines')->middleware('can:admin');
Route::resource('pettypes', PetTypeController::class)->names('admin.pettypes')->middleware('can:admin');
Route::resource('categories', CategoryController::class)->names('admin.categories')->middleware('can:admin');

Route::resource('announcements', AnnouncementController::class)->names('admin.announcements')->middleware('can:admin');
