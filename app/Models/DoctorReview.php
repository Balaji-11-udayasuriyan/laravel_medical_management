<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DoctorReview extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id', 
        'doctor_id', 
        'rating', 
        'comment'

    ];

    // Relationship to the doctor
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    // Relationship to the user who gave the review
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
