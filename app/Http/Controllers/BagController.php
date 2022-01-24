<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagController extends Controller
{
    //

    public function bagShow(){
        
        return view('bag');

    }

    public function profileShow(){
        
        return view('profile');

    }
}
