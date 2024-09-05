<?php

namespace App\Filament\Resources\PrescriptionReviewResource\Pages;

use App\Filament\Resources\PrescriptionReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrescriptionReview extends EditRecord
{
    protected static string $resource = PrescriptionReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
