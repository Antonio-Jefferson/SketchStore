<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'order_items_id',
    ];

    public function customer()
    {
        return $this->belongsTo(CustomerDetail::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
