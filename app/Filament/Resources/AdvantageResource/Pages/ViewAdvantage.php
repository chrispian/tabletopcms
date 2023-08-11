<?php

namespace App\Filament\Resources\AdvantageResource\Pages;

use App\Filament\Resources\AdvantageResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAdvantage extends ViewRecord
{
    protected static string $resource = AdvantageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
