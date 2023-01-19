<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
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

Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function(){

    Route::get('clients',[ClientController::class,'index']);
    Route::get('clients',[ClientController::class,'show']);
    Route::post('clients/{id}',[ClientController::class,'store']);
    Route::patch('clients/{id}',[ClientController::class,'update']);
    Route::delete('clients/{id}',[ClientController::class,'delete']);

});
