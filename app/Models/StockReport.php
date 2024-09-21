<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockReport extends Model
{
    use HasFactory;

    protected $fillable = [

        'medicine_id', 
        'quantity', 
        'reorder_level', 
        'status'

    ];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicine_id');
    }
}