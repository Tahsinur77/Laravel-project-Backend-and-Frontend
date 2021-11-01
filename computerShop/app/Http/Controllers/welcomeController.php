<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    //
    public function welcome(){
        return view('welcome');
    }
    public function home(){
        return view('pages.home');
    }
    public function about(){
        $var = "Trojan Horse Tech & Engineering Ltd\n Trojan Horse Tech & Engineering Ltd is a Computer
        hardware, software & service supplier company. Having the aim to satisfy customers, providing
        customers with their required products and being true to our moto, “Best price & Better
        After Sales Service”, has brought Trojan Horse Tech & Engineering Ltd to the top of the 
        E-Commerce Site and also is one of the trusted electronic retailer. We are a Tech-based product 
        seller. We are providing our customers with the best quality products at the most reasonable price.
        We have varieties of products that our customers can choose from. The product range starts from
        Desktop PC, Laptop & Netbook, UPS, Tablet PC, Monitors, Office Equipment, Camera, Security Camera, 
        Television and many other products. Each of our products is checked and reviewed before it is sold
        to our Loyal Customers. You are our driving force to better ourselves in all the aspects of the
        service-providing sector. We strive to become a Perfectionist Company that delivers everything,
        word for word. ";
        return view('pages.about') ->with('about', $var);
    }

    public function contact(){
        $var = array("Multiplan Branch", "Shop-xyz-xyz Level-05", "Multiplan Center", "New Elephant Road", "Dhaka");
        return view('pages.contact')->with('contact', $var);
    }


    public function logout(Request $req){
        $req->session()->flush();
        return redirect()->route('welcome');
    }


    public function pcBuilder(){
        return view('pages.pcBuilder');
    }

}
