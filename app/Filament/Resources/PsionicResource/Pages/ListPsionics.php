<?php

namespace App\Filament\Resources\PsionicResource\Pages;

use App\Filament\Resources\PsionicResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPsionics extends ListRecords
{
    protected static string $resource = PsionicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
