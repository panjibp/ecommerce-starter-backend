<?php

use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CheckoutController;
use App\Http\Controllers\API\TransactionController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products', [ProductController::class, 'all']);
Route::post('checkout', [CheckoutController::class, 'checkout']);
Route::get('transactions/{id}', [TransactionController::class, 'get']);
