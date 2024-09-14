<?php

namespace App\Filament\Resources\DiagnosticTestResource\Pages;

use App\Filament\Resources\DiagnosticTestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDiagnosticTests extends ListRecords
{
    protected static string $resource = DiagnosticTestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
