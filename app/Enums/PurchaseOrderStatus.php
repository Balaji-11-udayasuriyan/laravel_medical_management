<?php

namespace App\Enums;

enum PurchaseOrderStatus:string
{

    case Pending = 'pending';

    case Ordered = 'ordered';

    case Received = 'received';


    public static function getValues(): array
    {
        return array_column(PurchaseOrderStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(PurchaseOrderStatus::cases(), 'value','key');
    }

}