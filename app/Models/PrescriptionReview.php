<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionReview extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'prescription_id', 
        'pharmacist_id', 
        'review_notes', 
        'approval_status'
    
    ];

    public function prescription()
    {
        return $this->belongsTo(Prescription::class);
    }

    public function pharmacist()
    {
        return $this->belongsTo(User::class, 'pharmacist_id');
    }
}
