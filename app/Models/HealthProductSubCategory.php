<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthProductSubCategory extends Model
{
    use HasFactory;

    protected $fillable = [

        'health_product_category_id',
        'name'
        
    ];
}
