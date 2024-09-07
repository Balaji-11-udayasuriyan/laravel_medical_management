<?php

namespace App\Filament\Resources\PrescriptionBasedOrderResource\Pages;

use App\Filament\Resources\PrescriptionBasedOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrescriptionBasedOrder extends EditRecord
{
    protected static string $resource = PrescriptionBasedOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
