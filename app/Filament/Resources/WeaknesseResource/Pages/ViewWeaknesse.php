<?php

namespace App\Filament\Resources\WeaknesseResource\Pages;

use App\Filament\Resources\WeaknesseResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewWeaknesse extends ViewRecord
{
    protected static string $resource = WeaknesseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
