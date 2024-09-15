<?php

namespace App\Filament\Resources\TestAppointmentResource\Pages;

use App\Filament\Resources\TestAppointmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestAppointment extends EditRecord
{
    protected static string $resource = TestAppointmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
