<?php

namespace App\Filament\Resources\StrengthResource\Pages;

use App\Filament\Resources\StrengthResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStrengths extends ListRecords
{
    protected static string $resource = StrengthResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
