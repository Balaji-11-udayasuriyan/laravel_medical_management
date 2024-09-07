<?php

namespace App\Enums;

enum PaymentMethod:string
{

    case UPI = 'UPI';

    case Net_Banking = 'net banking';

    case Card = 'Card';

    


    public static function getValues(): array
    {
        return array_column(PaymentMethod::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(PaymentMethod::cases(), 'value','key');
    }

}