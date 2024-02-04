<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello', function () {
    return 'hello api';
});

Route::post('/hello', function (Request $request) {
    $name = $request->input("name");
    return response()->json(["message" => "hello $name"]);
    // return response()->json(["data" => "post request to hello endpoint"]);
});

Route::delete('/hello', function () {
    return response()->json(["data" => "delete request to hello endpoint"]);
});

Route::put('/hello', function () {
    return response()->json(["data" => "put request to hello endpoint"]);
});

Route::patch('/hello', function () {
    return response()->json(["data" => "patch request to hello endpoint"]);
});

Route::post('/createRandomUser', UserController::class . '@createRandomUser');

Route::post('/createArticle', ArticleController::class . '@createArticle')->middleware("auth:sanctum");

Route::get('/getArticles', ArticleController::class . '@getArticles');

Route::get('/getArticle/{id}', ArticleController::class . '@getArticle');

Route::delete('/deleteArticle/{id}', ArticleController::class . '@deleteArticle')->middleware("auth:sanctum");

Route::put('/updateArticle/{id}', ArticleController::class . '@updateArticle');

Route::post('/register', UserController::class . '@register');

Route::post('/login', UserController::class . '@login');
