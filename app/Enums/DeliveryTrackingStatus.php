<?php

namespace App\Enums;

enum DeliveryTrackingStatus:string
{

    case Pending = 'pending';

    case Processing = 'processing';

    case Completed = 'completed';

    case Cancelled = 'cancelled';


    public static function getValues(): array
    {
        return array_column(DeliveryTrackingStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(DeliveryTrackingStatus::cases(), 'value','key');
    }

}