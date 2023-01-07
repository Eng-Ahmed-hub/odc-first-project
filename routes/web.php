<?php

<<<<<<< HEAD
use App\Http\Controllers\EmployeeController;
=======
use App\Http\Controllers\BlogController;
>>>>>>> 871ddd9c925afa8aea99e709bd31db4089ead403
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
<<<<<<< HEAD
Route::get('home', [EmployeeController::class, 'index']);
Route::post('store-form', [EmployeeController::class, 'store']);
//=============Show All Employee=================================
Route::get('show',[EmployeeController::class,'show']);
=======
Route::get('/blog', [BlogController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
>>>>>>> 871ddd9c925afa8aea99e709bd31db4089ead403
