<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function create(){
        
        return view("address.create");
        
    }
}
