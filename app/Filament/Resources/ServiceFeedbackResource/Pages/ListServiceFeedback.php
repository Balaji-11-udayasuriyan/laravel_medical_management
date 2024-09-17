<?php

namespace App\Filament\Resources\ServiceFeedbackResource\Pages;

use App\Filament\Resources\ServiceFeedbackResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceFeedback extends ListRecords
{
    protected static string $resource = ServiceFeedbackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
