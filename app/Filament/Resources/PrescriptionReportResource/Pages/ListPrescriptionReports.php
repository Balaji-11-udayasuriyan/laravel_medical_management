<?php

namespace App\Filament\Resources\PrescriptionReportResource\Pages;

use App\Filament\Resources\PrescriptionReportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrescriptionReports extends ListRecords
{
    protected static string $resource = PrescriptionReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
