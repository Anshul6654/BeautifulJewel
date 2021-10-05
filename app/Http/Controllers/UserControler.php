<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControler extends Controller
{
    //
    function openLogin(){
        return view('login');
    }
    function openProducts(){
        return view('product');
    }
    
    function openCart(){
        return view('cart');
    }
    function openParticularProduct(){
        return view('eachproduct');
    }

    
    function getData(Request $userData){
        return $userData->input();
    }
}
