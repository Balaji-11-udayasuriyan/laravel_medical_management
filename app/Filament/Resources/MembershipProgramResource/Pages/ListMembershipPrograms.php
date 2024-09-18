<?php

namespace App\Filament\Resources\MembershipProgramResource\Pages;

use App\Filament\Resources\MembershipProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMembershipPrograms extends ListRecords
{
    protected static string $resource = MembershipProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
