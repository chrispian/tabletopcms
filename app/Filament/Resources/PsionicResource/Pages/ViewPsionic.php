<?php

namespace App\Filament\Resources\PsionicResource\Pages;

use App\Filament\Resources\PsionicResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPsionic extends ViewRecord
{
    protected static string $resource = PsionicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
