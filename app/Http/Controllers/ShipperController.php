<?php

namespace App\Http\Controllers;

use App\Models\Order;

class ShipperController extends Controller
{
    public function viewOrderShipper(){
        // Voir les commandes seller_accept
        $orders = Order::where('state', 'seller_ready');
        return $orders;
    }

    public function processOrder($idOrder, $process){
        // Traite une commande
    }
}
