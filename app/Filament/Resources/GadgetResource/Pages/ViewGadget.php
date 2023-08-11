<?php

namespace App\Filament\Resources\GadgetResource\Pages;

use App\Filament\Resources\GadgetResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGadget extends ViewRecord
{
    protected static string $resource = GadgetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
