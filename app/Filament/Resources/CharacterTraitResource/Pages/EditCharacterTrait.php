<?php

namespace App\Filament\Resources\CharacterTraitResource\Pages;

use App\Filament\Resources\CharacterTraitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCharacterTrait extends EditRecord
{
    protected static string $resource = CharacterTraitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
