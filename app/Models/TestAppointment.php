<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TestAppointment extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'diagnostic_test_id',
        'appointment_date',
        'appointment_time',
        'status'
        
    ];

    public function diagnosticTest()
    {
        return $this->belongsTo(DiagnosticTest::class, 'diagnostic_test_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
