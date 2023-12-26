<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Models\User;
use App\Http\Controllers\DB;

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

Route::get('/sucesso', function () {
    return view('User\sucesso');
})->middleware('auth');

Route::get('/fail', function () {
    return view('User\fail');
})->middleware('auth');




Route::get('/auth',function(){
    return view('User.auth');
});
Route::post('/authenticate',[UserController::class, 'authenticate']);






Route::get('/createAcc',function(){
    return view('User.createAccount');
});
Route::post('/creatingAccount',[UserController::class, 'registerAccount']);


Route::get('/getAllTasks',[TaskController::class , 'getAllTasks']);

Route::get('/getTask',[TaskController::class, 'getTask']);

Route::post('/postTask',[TaskController::class, 'AddTask']);


