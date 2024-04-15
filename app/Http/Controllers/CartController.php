<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

public function index()
{
    $items = OrderItem::all();

    $combinedData = collect();

    foreach ($items as $item) {
        $product = Product::find($item->product_id);

        if ($product) {
            $combinedData->push([
                "product_id"=> $product->id,
                'name' => $product->name,
                'image_url' => $product->image_url,
                'price' => $item->price,
                'quantity' => $item->quantity,
            ]);
        }
    }

    return view("cart.index", ['items' => $combinedData]);
}

    public function store($id){
        $product = Product::find($id);

        $orderItem = OrderItem::where('product_id', $id)->first();

        if ($orderItem) {
            $orderItem->increment('quantity');
        } else {
            OrderItem::create([
                'product_id' => $product->id,
                'quantity' => 1,
                'price' => $product->price,
            ]);
        }

        return redirect()->back()->with('success','');
    }

    public function updateQuantity(Request $request, $id)
    {
        $orderItem = OrderItem::where('product_id', $id)->firstOrFail();
    
        if ($request->operation === 'increment') {
            $orderItem->increment('quantity');
        } elseif ($request->operation === 'decrement' && $orderItem->quantity > 1) {
            $orderItem->decrement('quantity');
        }
    
        return redirect()->route("cart");
    }

}
