<?php

namespace App\Filament\Resources\HealthProductSubCategoryResource\Pages;

use App\Filament\Resources\HealthProductSubCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHealthProductSubCategories extends ListRecords
{
    protected static string $resource = HealthProductSubCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
