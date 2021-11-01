<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    //

    public function cart(Request $req){
        $lists = array();
        if ($req->session()->has('lists')){
            $productArr = json_decode($req->session()->get('lists'));
            $lists = (array)$productArr;
        }
        
        return view('pages.orders.addToCart')
        ->with('cart',$lists)
        ->with('x',0);
    }


    public function addtoCart(Request $req){
        $id = $req->id;
        $product = Product::where('id',$id)->first();

        $var= new Product();
        $var->id = $product->id;
        $var->pName = $product->pName;
        $var->pCategory = $product->pCategory;
        $var->pType = $product->pType;
        $var->pId = $product->pId;
        $var->pPrice = $product->pPrice;
        $var->pQuantity = $product->pQuantity;
        $var->pPicture = 'storage/uploads/'.$product->pPicture;
        $var->pSpecification = json_decode($product->pSpecification);
        

        $lists = array();

        if ($req->session()->has('lists')){
            $productArr = json_decode($req->session()->get('lists'));
            $lists = (array)$productArr;

        }

        array_push($lists,$var);

        //return $lists;

        //$lists = $lists->distinct();

        session()->put('lists',json_encode($lists));

        //return "ok";
        return redirect()->route('order.cart');
    }


    public function remove(Request $req){

        $index = $req->x;

        $lists = array();
        if ($req->session()->has('lists')){
            $productArr = (array) json_decode($req->session()->get('lists'));
            unset($productArr[$index]);
            $lists = array_values($productArr);

        }

        session()->put('lists',json_encode($lists));
        
        return redirect()->route('order.cart');
    }

    public function placeOrder(Request $req){
        if($req->session()->has('customerId')){
            $num = $req->quantity;
            $customerId = $req->session()->get('customerId');
            $Orderproducts = json_decode($req->session()->get('lists'));
            $status = "processing";

            $order = new Order();
            $order->customerId = $customerId;
            $order->status = $status;
            $order->save();


            $x = 0;

            foreach($Orderproducts as $orderproduct){
                $orderDetail = new orderDetail();
                $orderDetail->orderId = $order->id;
                $orderDetail->productId = $orderproduct->id;
                $orderDetail->orderQuantity = $num[$x];
                $orderDetail->totalPrice = $num[$x]*$orderproduct->pPrice;
                $orderDetail->save();

            }


            $req->session()->forget('lists');
            return "Order Complete";
        }
        else{
            return redirect()->route('login');
        }
    }


}
