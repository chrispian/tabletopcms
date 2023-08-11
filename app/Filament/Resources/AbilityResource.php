<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbilitieResource\Pages;
use App\Filament\Resources\AbilitieResource\RelationManagers;
use App\Models\Abilitie;
use App\Models\Ability;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbilityResource extends Resource
{
    protected static ?string $model = Ability::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAbilities::route('/'),
            'create' => Pages\CreateAbilitie::route('/create'),
            'view' => Pages\ViewAbilitie::route('/{record}'),
            'edit' => Pages\EditAbilitie::route('/{record}/edit'),
        ];
    }
}
