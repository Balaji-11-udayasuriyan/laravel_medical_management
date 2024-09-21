<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderReport extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id', 
        'status', 
        'total_amount', 
        'delivery_status', 
        'order_date'

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
