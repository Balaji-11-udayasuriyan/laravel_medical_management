<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PrescriptionReport extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id', 
        'doctor_id', 
        'medicine_name', 
        'dosage',
        'frequency',
        'prescription_date'

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicine_id');
    }
}
