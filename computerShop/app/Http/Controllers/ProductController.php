<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function addProducts(){
        return view('pages.products.addProducts');
    }
    
}
