<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [

        'first_name',
        'last_name',
        'specialization',
        'phone_number',
        'email',
        'profile_image',
        'biography',

    ];
    
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
