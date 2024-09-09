<?php

namespace App\Enums;

enum AddressType:string
{

    case Shipping = 'shiping';

    case Billing = 'billing';


    public static function getValues(): array
    {
        return array_column(AddressType::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(AddressType::cases(), 'value','key');
    }

}