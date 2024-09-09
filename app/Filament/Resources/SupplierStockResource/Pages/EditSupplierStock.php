<?php

namespace App\Filament\Resources\SupplierStockResource\Pages;

use App\Filament\Resources\SupplierStockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSupplierStock extends EditRecord
{
    protected static string $resource = SupplierStockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
