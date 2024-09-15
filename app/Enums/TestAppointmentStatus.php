<?php

namespace App\Enums;

enum TestAppointmentStatus:string
{

    case Pending = 'pending';

    case Confirmed = 'confirmed';

    case Completed = 'completed';

    case Cancelled = 'cancelled';


    public static function getValues(): array
    {
        return array_column(TestAppointmentStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(TestAppointmentStatus::cases(), 'value','key');
    }

}