<?php

namespace App\Filament\Resources\DeliveryNotificationResource\Pages;

use App\Filament\Resources\DeliveryNotificationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDeliveryNotification extends EditRecord
{
    protected static string $resource = DeliveryNotificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
