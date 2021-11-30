<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ShipperController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/



Route::post('clients/product/id', [ClientController::class, 'addproduct']); // ajouter un produit au panier
Route::put('clients/profile',[ClientController::class, 'createprofile']); // saisir adresse + numéro de téléphone
Route::post('clients/order', [ClientController::class, 'validateOrder']); //
Route::get('clients/validate/{idClient}', [ClientController::class, 'viewOrderClient']); //

Route::get('seller/order', [SellerController::class, 'viewOrderSeller']);
Route::get('seller/order/{idOrder}/{process}', [SellerController::class, 'processOrder']);

Route::get('shipper/order', [ShipperController::class, 'viewOrderShipper']);
Route::get('shipper/order/{idOrder}/{process}', [ShipperController::class, 'processOrder']);
