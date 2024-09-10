<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DeliveryTracking extends Model
{
    use HasFactory;

    protected $fillable = [

        'order_id',         
        'tracking_number',
        'status',           // Current delivery status
        'estimated_time',   // Estimated delivery time
        'current_location',
        'delivery_partner',

    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
