<?php

namespace App\Filament\Resources\CharacterTraitResource\Pages;

use App\Filament\Resources\CharacterTraitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCharacterTraits extends ListRecords
{
    protected static string $resource = CharacterTraitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
