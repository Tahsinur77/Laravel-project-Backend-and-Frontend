<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function addProducts(){
        return view('pages.products.addProducts');
    }

    public function products(Request $req){

        $pname = $req->pname;
        $category = $req->category;
        $type = $req->type;
        $price = $req->price;
        $component_num = count($req->component);

        $specification = array();

        for($i = 0 ; $i <$component_num;$i++){
            
            array_push($specification, $req->component[$i]);
        }

        


        return view('pages.products.products')
            ->with('pname',$pname)
            ->with('count',$component_num)
            ->with('specification',$specification);
            
    }
    
}
