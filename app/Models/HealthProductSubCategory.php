<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HealthProductSubCategory extends Model
{
    use HasFactory;

    protected $fillable = [

        'health_product_category_id',
        'name'

    ];

    public function healthProductCategory()
    {
        return $this->nelongsTo(HealthProductCategory::class, 'health_product_category_id');
    }
}
