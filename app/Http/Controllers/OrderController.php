<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends Controller
{
    //add Order
    public function add(){
        $all_product = Product::all();
        return view('order.add',compact('all_product'));
    }

}
