<?php

namespace App\Filament\Resources\SupplierStockResource\Pages;

use App\Filament\Resources\SupplierStockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSupplierStocks extends ListRecords
{
    protected static string $resource = SupplierStockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
