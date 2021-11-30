<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Order;

class SellerController extends Controller
{
    public function viewOrderSeller(){
        // Voir les commandes passées par les clients
        $orders = Order::where('validatebyClient','1')->get();
        return $orders;
    }

    public function processOrder($idOrder, $process){
        // Traiter une commande

    }
}
