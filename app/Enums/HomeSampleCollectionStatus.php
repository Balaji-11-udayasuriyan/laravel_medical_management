<?php

namespace App\Enums;

enum HomeSampleCollectionStatus:string
{

    case scheduled = 'scheduled';

    case collected = 'collected';

    case failed = 'failed';

    case Cancelled = 'cancelled';


    public static function getValues(): array
    {
        return array_column(HomeSampleCollectionStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(HomeSampleCollectionStatus::cases(), 'value','key');
    }

}