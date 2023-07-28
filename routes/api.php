<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\TransactionController;
use App\Models\Client;
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


Route::get('/clients',[ClientController::class, 'index']);
Route::get('/clients/{id}',[ClientController::class, 'find']);
Route::get('/clients/{id}/comptes',[ClientController::class, 'getCompte']);
Route::post('/clients',[ClientController::class, 'store']);
Route::get('/comptes',[CompteController::class, 'index']);
Route::get('/comptes/{id}',[CompteController::class, 'find']);
Route::post('/comptes',[CompteController::class, 'store']);
Route::get('/transactions',[TransactionController::class, 'index']);
Route::get('/transactions/{id}',[TransactionController::class, 'find']);
Route::post('/transactions',[TransactionController::class, 'store']);
