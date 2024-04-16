<?php

namespace App\Providers;

use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $data = OrderItem::all();
        $quantity = $data->count();
    
        $items = OrderItem::all();
    
        $combinedData = collect();
        $total = 0;
    
        foreach ($items as $item) {
            $product = Product::find($item->product_id);
    
            if ($product) {
                $combinedData->push([
                    'name' => $product->name,
                    'price' => $item->price,
                    'quantity' => $item->quantity,
                ]);
            }
    
            $total += $item->price * $item->quantity;
        }
    
        View::share('quantity', $quantity);
        View::share('itemsCart', $combinedData);
        View::share('total', $total);

    }
}