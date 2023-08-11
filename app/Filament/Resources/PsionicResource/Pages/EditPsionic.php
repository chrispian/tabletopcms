<?php

namespace App\Filament\Resources\PsionicResource\Pages;

use App\Filament\Resources\PsionicResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPsionic extends EditRecord
{
    protected static string $resource = PsionicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
