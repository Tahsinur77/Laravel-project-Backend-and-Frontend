<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\OrderDetail;
use App\Models\customer;

class Order extends Model
{
    use HasFactory;

    public function orderDetail(){
        return $this->hasMany(OrderDetail::class,'orderId');
    }

    public function customer(){
        return $this->belongsTo(Customer::class,'customerId','id');
    }
}
