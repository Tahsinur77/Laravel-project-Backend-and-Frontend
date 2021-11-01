<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Order;

class Product extends Model
{
    use HasFactory;

    public function order(){
        return $this->hasMany(OrderDetail::class);
    }
}
