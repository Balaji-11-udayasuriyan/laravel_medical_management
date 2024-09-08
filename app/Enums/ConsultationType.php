<?php

namespace App\Enums;

enum ConsultationType:string
{

    case In_Person = 'in-person';

    case Video = 'video';

    public static function getValues(): array
    {
        return array_column(ConsultationType::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(ConsultationType::cases(), 'value','key');
    }

}