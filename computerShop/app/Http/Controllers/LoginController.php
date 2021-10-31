<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('pages.login');
    }
    /*
        read from customer and employee table
        if 
            customer found then redirect to orderlist, profile
        else
             emolyee found then check emp type
                      if admin
                            can edit, delete other emp
                      if sales man 
                            

    */
    
}
