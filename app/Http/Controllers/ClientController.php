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
        $cart = new Cart;
        $client -> phone = $request ->phone;
        $client -> adresse = $request ->adresse;
        $client -> cart_id = $cart -> id;
        $client -> save();

        return "Informations saved, your ID Client : " + $client -> id;
    }

    public function addproduct($idClient, $idProduit){
        // Ajoute les produits aux panier

    }

    public function validateOrder(){
        // Validation de la commande par le client

        // Création de la commande à partir du panier

        $order = new Order();
        // order -> product = cart -> product

    }

    public function viewOrderClient($idClient){
        // Consulter l'état de sa commande
        $order = Order::find($idClient);
        return $order -> state;

    }
}
