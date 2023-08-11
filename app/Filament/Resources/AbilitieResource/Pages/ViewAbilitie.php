<?php

namespace App\Filament\Resources\AbilitieResource\Pages;

use App\Filament\Resources\AbilityResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAbilitie extends ViewRecord
{
    protected static string $resource = AbilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
