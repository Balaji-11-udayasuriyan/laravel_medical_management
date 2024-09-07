<?php

namespace App\Enums;

enum PaymentStatus:string
{

    case Pending = 'pending';

    case Processing = 'processing';

    case Completed = 'completed';

    case Cancelled = 'cancelled';


    public static function getValues(): array
    {
        return array_column(PaymentStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(PaymentStatus::cases(), 'value','key');
    }

}