<?php

namespace App\Filament\Resources\PrescriptionBasedOrderResource\Pages;

use App\Filament\Resources\PrescriptionBasedOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrescriptionBasedOrders extends ListRecords
{
    protected static string $resource = PrescriptionBasedOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
