<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Sell;

class sellController extends Controller
{
    //

    public function unsold(){
        $unsolds = Order::where('status','processing')->get();
        return view('pages.sell.unsold')
        ->with('unsolds',$unsolds);
    }

    public function unsoldOrderDetails(Request $req){
        $orderId = $req->orderId;
        $orderDetails = OrderDetail::where('orderId',$orderId)->get();
        return view('pages.sell.orderDetails')
        ->with('orderDetails',$orderDetails)
        ->with('orderId',$orderId);
    }

    public function sellOrder(Request $req){
        $orderId = $req->orderId;
        $orderDetails = OrderDetail::where('orderId',$orderId)->get();
        $empId = $req->session()->get('employeeId');

        foreach($orderDetails as $od){
            $var = new Sell();
            $var->orderId = $orderId;
            $var->employeeId = $empId;
            $var->quantity = $od->orderQuantity;
            $var->productId = $od->product->id;
            $var->total = $od->product->pPrice * $od->orderQuantity;
            $var->save();
        }
            
    return "sold";

    }
}
