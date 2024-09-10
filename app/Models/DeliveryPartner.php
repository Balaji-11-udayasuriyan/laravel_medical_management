<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryPartner extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'api_url',         // URL for API integration
        'api_key',         // API Key for authentication
        'contact_info',
        
    ];
}
