<?php

namespace App\Filament\Resources\PrescriptionReportResource\Pages;

use App\Filament\Resources\PrescriptionReportResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrescriptionReport extends EditRecord
{
    protected static string $resource = PrescriptionReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
