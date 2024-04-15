<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    
    public function index(){

        $data = OrderItem::all();
        $quantity = $data->count();
        //dd($quantity);
        $products = Product::all();
    
        return view('home.index', ['products' => $products, 'quantity' => $quantity]);
    }
}
