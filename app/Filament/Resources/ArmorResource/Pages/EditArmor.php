<?php

namespace App\Filament\Resources\ArmorResource\Pages;

use App\Filament\Resources\ArmorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArmor extends EditRecord
{
    protected static string $resource = ArmorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
