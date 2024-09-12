<?php

namespace App\Enums;

enum PaymentInvoiceStatus:string
{

    case Paid = 'Paid';

    case Un_Paid = 'Un Paid';


    public static function getValues(): array
    {
        return array_column(PaymentInvoiceStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(PaymentInvoiceStatus::cases(), 'value','key');
    }

}