<?php

namespace App\Filament\Resources\HealthProductSubCategoryResource\Pages;

use App\Filament\Resources\HealthProductSubCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHealthProductSubCategory extends EditRecord
{
    protected static string $resource = HealthProductSubCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
