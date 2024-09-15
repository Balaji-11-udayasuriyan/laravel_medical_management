<?php

namespace App\Filament\Resources\HomeSampleCollectionResource\Pages;

use App\Filament\Resources\HomeSampleCollectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeSampleCollections extends ListRecords
{
    protected static string $resource = HomeSampleCollectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
