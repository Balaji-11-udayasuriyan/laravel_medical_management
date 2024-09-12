<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'order_id',
        'payment_method', 
        'transaction_id', 
        'amount', 
        'status'
    
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}