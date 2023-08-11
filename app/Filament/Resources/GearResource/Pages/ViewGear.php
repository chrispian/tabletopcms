<?php

namespace App\Filament\Resources\GearResource\Pages;

use App\Filament\Resources\GearResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGear extends ViewRecord
{
    protected static string $resource = GearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
