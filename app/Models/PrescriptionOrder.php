<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionOrder extends Model
{
    use HasFactory;

    protected $fillable = [

        'order_id',
        'prescription_id',
        
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function prescription()
    {
        return $this->belongsTo(Prescription::class, 'prescription_id');
    }
}
