<?php

use App\Http\Controllers\AreamanagerPanel\AreamanagerController;
use App\Http\Controllers\GuidePanel\GuiderController;
use App\Http\Controllers\CustomerPanel\CustomerController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SheduleController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [CustomerController::class ,'index' ])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth','usertype:areamanager')->group(function () {
    Route::get('/areamanager/dashboard',[AreamanagerController::class,'index'])->name('areamanager.dashboard');
    Route::resource('/shedule', SheduleController::class);
});

Route::middleware('auth','usertype:guide')->group(function () {
    Route::get('/guide/dashboard',[GuiderController::class,'index'])->name('guide.dashboard');
    Route::resource('/guide/hotel', HotelController::class);
    Route::resource('/card', CardController::class);
});


Route::get('/search/shedule',[SearchController::class,'index'])->name('search.index');


