<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'user_id', 
        'product_id', 
        'quantity'
    
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function healthProduct()
    {
        return $this->belongsTo(HealthProduct::class, 'product_id');
    }
}
