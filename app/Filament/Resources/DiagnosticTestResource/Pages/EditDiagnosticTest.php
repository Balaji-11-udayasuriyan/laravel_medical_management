<?php

namespace App\Filament\Resources\DiagnosticTestResource\Pages;

use App\Filament\Resources\DiagnosticTestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiagnosticTest extends EditRecord
{
    protected static string $resource = DiagnosticTestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
