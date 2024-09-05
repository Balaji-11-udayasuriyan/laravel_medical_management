<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable = [

        'customer_id', 
        'file_path', 
        'notes', 
        'status'

    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function reviews()
    {
        return $this->hasMany(PrescriptionReview::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }

    
}
