<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\ContactForm;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContactFormResource\Pages;
use App\Filament\Resources\ContactFormResource\RelationManagers;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;

class ContactFormResource extends Resource
{
    protected static ?string $model = ContactForm::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Request';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('name')
                            ->required(),

                        Grid::make(2)
                            ->schema([
                                TextInput::make('email')
                                    ->required(),

                                TextInput::make('phone')
                                    ->required(),
                            ]),
                    ]),

                Card::make()
                    ->schema([
                        TextInput::make('purpose')
                            ->required(),

                        Textarea::make('msz')
                            ->label('Description')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->toggleable()
                    ->searchable()
                    ->wrap(),

                TextColumn::make('purpose')
                    ->sortable()
                    ->toggleable()
                    ->searchable()
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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),

                FilamentExportBulkAction::make('export')
                    ->label('Export Selected'),
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
            'index' => Pages\ListContactForms::route('/'),
            'create' => Pages\CreateContactForm::route('/create'),
            'edit' => Pages\EditContactForm::route('/{record}/edit'),
        ];
    }
}
