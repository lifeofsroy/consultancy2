<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Counter;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Guava\FilamentIconPicker\Tables\IconColumn;
use App\Filament\Resources\CounterResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CounterResource\RelationManagers;

class CounterResource extends Resource
{
    protected static ?string $model = Counter::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('title')
                                    ->required(),

                                TextInput::make('value')
                                    ->required(),

                                TextInput::make('unit'),
                            ]),
                    ])
                    ->columnspan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->toggleable()
                    ->wrap(),
                TextColumn::make('value')
                    ->sortable()
                    ->searchable()
                    ->toggleable()
                    ->wrap(),
                TextColumn::make('unit')
                    ->sortable()
                    ->searchable()
                    ->toggleable()
                    ->wrap(),

                TextColumn::make('updated_at')
                    ->date()
                    ->sortable()
                    ->searchable()
                    ->toggleable()
                    ->color('primary')
                    ->size('sm')
                    ->label('Updated'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCounters::route('/'),
            'create' => Pages\CreateCounter::route('/create'),
            'edit' => Pages\EditCounter::route('/{record}/edit'),
        ];
    }
}
