<?php

namespace App\Filament\Resources\WeaknesseResource\Pages;

use App\Filament\Resources\WeaknesseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWeaknesse extends EditRecord
{
    protected static string $resource = WeaknesseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
