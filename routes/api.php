<?php

use App\User;
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

// Route::resources([
//     'plans' => 'Api\\PlanController'
// ]);
Route::resource('plans', 'Api\\PlanController')->except(['create', 'edit']);
Route::resource('groups', 'Api\\GroupController')->except(['create', 'edit']);
Route::resource('users', 'Api\\UserController')->except(['create', 'edit']);
