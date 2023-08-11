<?php

namespace App\Filament\Resources\GearResource\Pages;

use App\Filament\Resources\GearResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGears extends ListRecords
{
    protected static string $resource = GearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
