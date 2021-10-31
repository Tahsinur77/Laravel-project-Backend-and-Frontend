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
        $this->validate(
            $req,
            
            [
                'category'=>'required',
                'type'=>'required',
                'pId'=>'required| regex:/^[a-zA-Z0-9_.-]*$/',
                'pname'=>'required',
                'price'=>'required|numeric|gt:0',
                'quantity'=>'required|numeric|gt:0',
                'pic' => 'required|image|mimes:jpg,png,jpeg'
            ]
        );
        
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
        $var->pId = $req->pId;
        $var->pType = $req->type;
        $var->pPrice = $req->price;
        $var->pQuantity = $req->quantity;
        $var->pPicture = $pic;
        $var->pSpecification = json_encode($specification);
        $var->save();
        

        return redirect()->route('addproducts');
            
    }



    public function productListByCategory(Request $req){
        $categoryName = $req->category;
        $allProducts = Product::where('pCategory',$categoryName)->get();

        $products = array();

        foreach($allProducts as $product){
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
           
            

            $miniSpecification  =array();

            $check = 0;
            foreach(json_decode($product->pSpecification) as $spe){
                array_push($miniSpecification,$spe);
                $check++;

                if($check == 3) break;
            }

            $var->miniSpecifications = $miniSpecification;

            array_push($products,$var);
        }
        

        return view('pages.products.products')
        ->with('products',$products);
    }


    public function productListByType(Request $req){
        $categoryName = $req->category;
        $typeName = $req->type;
        $allProducts = Product::where(['pCategory'=>$categoryName,'pType'=>$typeName])->get();

        $products = array();

        foreach($allProducts as $product){
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

            $miniSpecification  =array();

            $check = 0;
            foreach(json_decode($product->pSpecification) as $spe){
                array_push($miniSpecification,$spe);
                $check++;

                if($check == 3) break;
            }

            $var->miniSpecifications = $miniSpecification;

            array_push($products,$var);
        }

        return view('pages.products.products')
        ->with('products',$products);
    }
    
}
