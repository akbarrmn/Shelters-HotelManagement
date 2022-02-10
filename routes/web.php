<?php

use App\Http\Controllers\AlertsController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;
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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::post('/', [HomeController::class, 'store'])
    ->name('booking');

Route::get('/alert', [AlertsController::class, 'index'])
    ->name('alert');

Route::get('/alert/{id}', [AlertsController::class, 'destroy'])
    ->name('hapusbooked');



//admin/
Route::prefix('admin')
    ->namespace('App\\Http\\Controllers\\Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')
            ->name('Dashboard');
        Route::resource('room-category','RoomCategoryController');
        Route::resource('booked-list','BookedListController');
        Route::resource('manage-news','NewsController');
        Route::resource('manage-users','UserController');
    });

Auth::routes();
