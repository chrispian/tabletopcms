<?php

namespace App\Filament\Resources\WeaknesseResource\Pages;

use App\Filament\Resources\WeaknesseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWeaknesses extends ListRecords
{
    protected static string $resource = WeaknesseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
