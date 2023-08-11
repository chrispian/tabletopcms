<?php

namespace App\Filament\Resources\GearResource\Pages;

use App\Filament\Resources\GearResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGear extends EditRecord
{
    protected static string $resource = GearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
