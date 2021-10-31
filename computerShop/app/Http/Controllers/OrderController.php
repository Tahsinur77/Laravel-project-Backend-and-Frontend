<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class OrderController extends Controller
{
    //
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
            $lists = $productArr;

        }

        array_push($lists,$var);

        session()->put('lists',json_encode($lists));

        //return "ok";
        return view('pages.orders.addToCart')
        ->with('cart',$lists);
    }
}
