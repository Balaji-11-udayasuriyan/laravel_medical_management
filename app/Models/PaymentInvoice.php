<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentInvoice extends Model
{
    use HasFactory;

    protected $fillable = [

        'order_id',
        'invoice_number',
        'invoice_date',
        'total_amount',
        'status', 

    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

}