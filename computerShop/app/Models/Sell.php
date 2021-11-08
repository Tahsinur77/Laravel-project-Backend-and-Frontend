<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Employee;

class Sell extends Model
{
    use HasFactory;
    public function orders(){
        return $this->hasMany(Order::class,'orderId');
    }

    public function sellByEmployee(){
        return $this->hasMany(Employee::class,'employeeId');
    }
}
