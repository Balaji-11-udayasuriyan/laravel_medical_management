<?php

namespace App\Filament\Resources\DoctorReviewResource\Pages;

use App\Filament\Resources\DoctorReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoctorReview extends EditRecord
{
    protected static string $resource = DoctorReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
