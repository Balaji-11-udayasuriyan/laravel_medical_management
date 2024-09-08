<?php

namespace App\Enums;

enum VariantFormType:string
{

    case Tablet = 'Tablet';

    case Syrup = 'Syrup';

    case Injection = 'Injection';


    public static function getValues(): array
    {
        return array_column(VariantFormType::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(VariantFormType::cases(), 'value','key');
    }

}