<?php

namespace App\Filament\Resources\ArmorResource\Pages;

use App\Filament\Resources\ArmorResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewArmor extends ViewRecord
{
    protected static string $resource = ArmorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
