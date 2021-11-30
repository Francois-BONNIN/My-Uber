<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cart = Cart::create();
        DB::table('clients')->insert([
            'cart_id'=>$cart->id,
            'adresse'=> '2 place de la République, 31000',
            'phone'=> '0102030405',
        ]);
    }
}
