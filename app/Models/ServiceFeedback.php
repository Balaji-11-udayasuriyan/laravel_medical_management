<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceFeedback extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id', 
        'service_id', 
        'rating', 
        'comment',
    ];

    // Relationship to the service
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    // Relationship to the user who gave the feedback
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
