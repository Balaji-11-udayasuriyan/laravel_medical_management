<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaleReport extends Model
{
    use HasFactory;

    protected $fillable = [

        'order_id', 
        'amount', 
        'payment_method', 
        'customer_type', 
        'sale_date', 
        'location'

    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
