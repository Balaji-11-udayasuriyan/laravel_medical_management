<?php

namespace App\Enums;

enum UserActivitiesActivityType:string
{

    case login = 'login';

    case appointment_booking = 'appointment_booking';


    public static function getValues(): array
    {
        return array_column(UserActivitiesActivityType::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(UserActivitiesActivityType::cases(), 'value','key');
    }

}