<?php

namespace App\Enums;

enum OrderPaymentMethod:string
{

    case UPI = 'UPI';

    case Net_Banking = 'net banking';

    case Card = 'Card';

    


    public static function getValues(): array
    {
        return array_column(OrderPaymentMethod::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(OrderPaymentMethod::cases(), 'value','key');
    }

}