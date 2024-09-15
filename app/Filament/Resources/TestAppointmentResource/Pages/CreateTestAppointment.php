<?php

namespace App\Filament\Resources\TestAppointmentResource\Pages;

use App\Filament\Resources\TestAppointmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTestAppointment extends CreateRecord
{
    protected static string $resource = TestAppointmentResource::class;
}
