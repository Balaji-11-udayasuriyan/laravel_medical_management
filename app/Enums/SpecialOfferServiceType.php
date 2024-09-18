<?php

namespace App\Enums;

enum SpecialOfferServiceType:string
{


    case Tests = 'Tests';

    case Consultations = 'Consultations';


    public static function getValues(): array
    {
        return array_column(SpecialOfferServiceType::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(SpecialOfferServiceType::cases(), 'value','key');
    }

}