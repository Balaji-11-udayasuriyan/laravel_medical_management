<?php

namespace App\Enums;

enum StockReportStatus:string
{
    case in_stock = 'in_stock';

    case out_of_stock = 'out_of_stock';


    public static function getValues(): array
    {
        return array_column(StockReportStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(StockReportStatus::cases(), 'value','key');
    }

}