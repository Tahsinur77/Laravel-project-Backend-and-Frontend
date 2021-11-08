<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Employee extends Model
{
    use HasFactory;

    public function sell(){
        return $this->belongTo(Sell::class,'employeeId');
    }
}
