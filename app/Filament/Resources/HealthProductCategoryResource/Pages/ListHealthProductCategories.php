<?php

namespace App\Filament\Resources\HealthProductCategoryResource\Pages;

use App\Filament\Resources\HealthProductCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHealthProductCategories extends ListRecords
{
    protected static string $resource = HealthProductCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
