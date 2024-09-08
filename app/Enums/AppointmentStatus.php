<?php

namespace App\Enums;

enum AppointmentStatus:string
{

    case Pending = 'pending';

    case Processing = 'processing';

    case Completed = 'completed';

    case Cancelled = 'cancelled';


    public static function getValues(): array
    {
        return array_column(AppointmentStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(AppointmentStatus::cases(), 'value','key');
    }

}