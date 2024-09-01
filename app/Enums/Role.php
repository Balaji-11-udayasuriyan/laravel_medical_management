<?php

namespace App\Enums;

enum Role:string
{


    case Admin = 'admin';

    case Pharmacist = 'pharmacist';

    case Customer = 'customer';

    case Doctor = 'doctor';


    public static function getValues(): array
    {
        return array_column(Role::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(Role::cases(), 'value','key');
    }
}