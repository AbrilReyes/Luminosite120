<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

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





Route::post('/loo',[LoginController::class,'loo']);
Route::post('/loo2', [LoginController::class,'loo2']);
Route::get('/get01g', [LoginController::class,'get01g']);;


Route::put('/editar/{id_usuario}',[LoginController::class,'editar']);


Route::delete('/eliminar/{id_usuario}',[LoginController::class,'eliminar']);