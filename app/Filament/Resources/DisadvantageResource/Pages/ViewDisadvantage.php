<?php

namespace App\Filament\Resources\DisadvantageResource\Pages;

use App\Filament\Resources\DisadvantageResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDisadvantage extends ViewRecord
{
    protected static string $resource = DisadvantageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
