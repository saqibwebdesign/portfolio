<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\settingsController;
use App\Http\Controllers\admin\portfolioController;
use App\Http\Controllers\webController;
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


Route::get('/', [webController::class, 'index'])->name('web.home');
Route::get('/catagory/{id}', [webController::class, 'category'])->name('web.category');


// Admin
    Route::prefix('admin')->namespace('admin')->group(function(){
        Route::get('/login', [adminController::class, 'login'])->name('admin.login');
        Route::post('/login', [adminController::class, 'loginSubmit'])->name('admin.login');
        Route::get('/logout', [adminController::class, 'logout'])->name('admin.logout');

        //Middleware
            Route::middleware('adminAuth')->group(function(){
                Route::get('/', [adminController::class, 'index'])->name('admin.dashboard');
                    //Restaurants
                        Route::prefix('portfolio')->group(function(){
                            Route::get('/', [portfolioController::class, 'index'])->name('admin.portfolio');   
                            Route::post('/add', [portfolioController::class, 'portfolioAdd'])->name('admin.portfolio.add');
                            Route::get('/edit/{id}', [portfolioController::class, 'portfolioEdit']);
                            Route::post('/update', [portfolioController::class, 'portfolioUpdate'])->name('admin.portfolio.update');
                        });

                    //Categories
                        Route::prefix('categories')->group(function(){
                            Route::get('/', [settingsController::class, 'catagories'])->name('admin.catagories');
                            Route::get('/delete/{id}', [settingsController::class, 'catagoriesDelete']);
                            Route::get('/edit/{id}', [settingsController::class, 'catagoriesEdit']);
                            Route::post('/add', [settingsController::class, 'catagoriesAdd'])->name('admin.catagories.add');
                            Route::post('/update', [settingsController::class, 'catagoriesUpdate'])->name('admin.catagories.update');
                        });
                });   
    });  