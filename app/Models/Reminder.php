<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reminder extends Model
{
    use HasFactory;

    protected $fillable = [

        'appointment_id',
        'reminder_time',
        'is_sent',

    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
