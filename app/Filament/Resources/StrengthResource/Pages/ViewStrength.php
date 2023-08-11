<?php

namespace App\Filament\Resources\StrengthResource\Pages;

use App\Filament\Resources\StrengthResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStrength extends ViewRecord
{
    protected static string $resource = StrengthResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
