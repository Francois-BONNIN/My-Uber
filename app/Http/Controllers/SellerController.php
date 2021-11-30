<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Http\Requests\StoreSellerRequest;
use App\Http\Requests\UpdateSellerRequest;
use App\Models\Order;

class SellerController extends Controller
{
    public function viewOrderSeller(){
        // Voir les commandes passées par les clients
        $orders = Order::where('validatebyClient',true)->get();
        return $orders;
    }

    public function processOrder($idOrder, $process){
        // Traiter une commande

    }
}
