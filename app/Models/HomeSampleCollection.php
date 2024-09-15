<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HomeSampleCollection extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'appointment_id',
        'collection_address',
        'scheduled_date',
        'scheduled_time',
        'status'

    ];

    public function appointment()
    {
        return $this->belongsTo(TestAppointment::class, 'appointment_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
