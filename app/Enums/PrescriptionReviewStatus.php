<?php

namespace App\Enums;

enum PrescriptionReviewStatus:string
{

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