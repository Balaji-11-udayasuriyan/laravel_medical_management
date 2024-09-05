<?php

namespace App\Enums;

enum PrescriptionStatus:string
{

    case Pending = 'pending';

    case Reviewed = 'reviewed';

    case Approved = 'approved';

    case Rejected = 'rejected';


    public static function getValues(): array
    {
        return array_column(PrescriptionStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(PrescriptionStatus::cases(), 'value','key');
    }

}