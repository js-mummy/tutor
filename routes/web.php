<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Admin\MainController;
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


    Route::get('/', function () {
        return view('welcome');
    });

    /*    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
            Route::get('/', [MainController::class, 'index'])->name('admin.index');
        });*/

    Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {
        Route::get('/', 'MainController@index')->name('admin.index');
        Route::resource('/categories', 'CategoryController');
        Route::resource('/tags', 'TagController');
    });



    /*   Route::prefix('admin')->group(function () {
           Route::get('/', [Admin\MainController::class, 'index'])->name('admin.index');
       });*/

    /*    Route::prefix('admin')->group( function () {
            Route::get('/', [MainController::class, 'index'])->name('admin.index');
        });*/


    /*    Route::controller(MainController::class)->prefix('admin')->group( function () {
            Route::get('/','index')->name('admin.index');
        });*/
