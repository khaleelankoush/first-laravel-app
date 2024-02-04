<?php

use App\Http\Controllers\BookingController;
use App\Http\Middleware\IsTarmeezUser;
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

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    $val = 10;
    $name = 'Khaleel';

    $students = ['Ahamad', 'Mohammad', 'Ali', 'Khaled', 'Khaleel', 'Omar', 'Hassan'];
    return view('hello')->with('renderedName', $name)->with('value', $val)->with('students', $students);
});

Route::get('/myBookings/{name}', BookingController::class . '@myBookings')->middleware(IsTarmeezUser::class);

Route::get('/sayHello/{name}', BookingController::class . '@sayHello')->middleware(IsTarmeezUser::class);

Route::get('/login', BookingController::class . '@login');
