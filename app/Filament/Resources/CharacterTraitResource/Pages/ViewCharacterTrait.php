<?php

namespace App\Filament\Resources\CharacterTraitResource\Pages;

use App\Filament\Resources\CharacterTraitResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCharacterTrait extends ViewRecord
{
    protected static string $resource = CharacterTraitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
