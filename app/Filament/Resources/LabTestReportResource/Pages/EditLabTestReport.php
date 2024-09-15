<?php

namespace App\Filament\Resources\LabTestReportResource\Pages;

use App\Filament\Resources\LabTestReportResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLabTestReport extends EditRecord
{
    protected static string $resource = LabTestReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
