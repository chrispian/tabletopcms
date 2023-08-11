<?php

namespace App\Filament\Resources\PowerResource\Pages;

use App\Filament\Resources\PowerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPower extends ViewRecord
{
    protected static string $resource = PowerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
