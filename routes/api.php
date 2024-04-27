<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//users routes
Route::post('/users/register', [UserController::class, 'handleRegister']);
Route::get('/users/{id}', [UserController::class, 'handleGetUser']);
//Order Routes

//Category Routes
Route::post('/categories/create', [Category::class, 'createCategory']);
Route::get('/categories', [Category::class, 'getCategories']);
