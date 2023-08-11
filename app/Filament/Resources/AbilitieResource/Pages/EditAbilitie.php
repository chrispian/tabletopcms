<?php

namespace App\Filament\Resources\AbilitieResource\Pages;

use App\Filament\Resources\AbilityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAbilitie extends EditRecord
{
    protected static string $resource = AbilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
