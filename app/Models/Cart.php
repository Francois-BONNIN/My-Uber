<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}