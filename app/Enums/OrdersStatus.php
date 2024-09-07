<?php

namespace App\Enums;

enum OrderStatus:string
{

    case Pending = 'pending';

    case Processing = 'processing';

    case Completed = 'completed';

    case Cancelled = 'cancelled';


    public static function getValues(): array
    {
        return array_column(OrderStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(OrderStatus::cases(), 'value','key');
    }

}