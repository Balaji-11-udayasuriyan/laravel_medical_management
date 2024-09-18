<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'service_type',
        'discount_amount',
        'discount_percentage',
        'valid_from',
        'valid_until',
        
    ];
}
