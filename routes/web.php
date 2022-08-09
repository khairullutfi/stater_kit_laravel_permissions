<?php

use App\Http\Controllers\Apps\DashboardController;
use App\Http\Controllers\Apps\PermissionsController;
use App\Http\Controllers\Apps\RoleController;
use App\Http\Controllers\Apps\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
})->middleware('guest');

Route::prefix('apps')->group(function(){
   Route::group(['middleware' => 'auth'], function(){
         Route::get('/dashboard', DashboardController::class)->name('apps.dashboard');
         Route::get('/permission', PermissionsController::class)->name('apps.permissions.index')->middleware('permission:permissions.index');
         Route::resource('/users', UsersController::class,  ['as' => 'apps'])->middleware('permission:users.index|users.create|users.edit|users.delete');
         Route::resource('/roles', RoleController::class,  ['as' => 'apps'])->middleware('permission:roles.index|roles.create|roles.edit|roles.delete');
    });
});

Route::get('/apps/dashboard', function () {
    return view('pages.apps.dashboard');
});
Route::get('/apps/rapat', function () {
    return view('pages.apps.manajement-rapat.create');
});

Route::get('/apps/rapat/anggota', function () {
    return view('pages.apps.manajement-rapat.edit');
});

Route::get('/apps/ruangan', function () {
    return view('pages.apps.ruangan.create');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
