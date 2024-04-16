<?php

namespace App\Providers;

use App\Models\OrderItem;
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
        View::share('quantity', $quantity);
    }
}