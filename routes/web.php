<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\MeasurementsController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

Auth::routes(); 

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');

    Route::resource('groups', GroupController::class);
    Route::resource('groups.students', StudentController::class);
    Route::resource('measurements', MeasurementsController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('posts', PostController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('schedule', ScheduleController::class);
    Route::resource('users', UserController::class);
});