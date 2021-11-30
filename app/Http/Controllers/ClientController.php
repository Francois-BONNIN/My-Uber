<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Order;


class ClientController extends Controller
{

    public function createprofile(Request $request){
        // create profile
        $client = new Client;
        $order = new Order;
        $client -> phone = $request ->phone;
        $client -> adresse = $request ->adresse;
        $client -> cart_id = $order -> id;
        $client -> save();

        return "Informations saved";
    }

    public function addproduct(Request $request){
        // Ajoute les produits aux panier

    }

    public function validateOrder(){
        // Validation de la commande par le client

        // Création de la commande à partir du panier
        $order = Order::find(1);
        $order -> validatebyClient = '1';
        $order -> save();
        return "Order validated";

    }

    public function viewOrderClient(){
        // Consulter l'état de sa commande
        $order = Order::find(1);
        return $order -> state;

    }
}
