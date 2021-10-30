<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


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
        $quantity = $req->quantity;
        if($req->hasFile('pic')){
            $pic = time().'_'.$req->file('pic')->getClientOriginalName();
            $req->file('pic')->storeAs('uploads',$pic,'public');
        }
        else{
            $pic = "none";
        }

        
        $component_num = count($req->component);

        $specification = array();

        for($i = 0 ; $i <$component_num;$i++){
            
            $specification[$req->component[$i]] = $req->model[$i];
        }

        $var = new product();
        $var->pName = $req->pname;
        $var->pCategory = $req->category;
        $var->pType = $req->type;
        $var->pPrice = $req->price;
        $var->pQuantity = $req->quantity;
        $var->pPicture = $pic;
        $var->pSpecification = json_encode($specification);
        $var->save();
        

        return view('pages.products.products')
            ->with('pname',$pname)
            ->with('specification',$specification);
            
    }

    public function findings(){
        $categorys = Product::select('pCategory')->pluck('pCategory');
        session()->put('pCategorys',json_encode($categorys));



        foreach($categorys as $category){
            $types = Product::select('pType')->where('pCategory',$category)->pluck('pType');

            session()->put($category,json_encode($types));

            //return session($category);
        }

        return redirect()->route('customer.list');

    }


    public function productList(){
        
    }
    
}
