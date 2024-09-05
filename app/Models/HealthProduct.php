<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthProduct extends Model
{
    use HasFactory;

    protected $fillable = [

        'health_product_category_id ',
        'health_product_sub_category_id',
        'name',
        'description',
        'image_path',
        'price',
        'stock'

    ];

    public function healthProductCategory()
    {
        return $this->belongsTo(HealthProductCategory::class, 'health_product_category_id');
    }

    public function healthProductSubCategory()
    {
        return $this->belongsTo(HealthProductSubCategory::class, 'health_product_sub_category_id');
    }

    public function getImagePath()
    {
        return env('DOMAIN_URL').Storage::url($this->image_path);
    }

    public function deleteImagePath()
    {
        if (Storage::exists($this->image_path)) 
        {
            Storage::delete($this->image_path);
        }
    }

}
