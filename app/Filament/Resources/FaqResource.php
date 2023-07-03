<?php

namespace App\Filament\Resources;

use App\Models\Faq;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\CheckboxColumn;
use App\Filament\Resources\FaqResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FaqResource\RelationManagers;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('question')
                            ->required(),

                        Textarea::make('answer')
                            ->required()
                            ->hint(fn ($state, $component) => 'left: ' . $component->getMaxLength() - strlen($state) . ' characters')
                            ->maxlength(300)
                            ->reactive(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question')
                    ->sortable()
                    ->searchable()
                    ->toggleable()
                    ->wrap(),

                IconColumn::make('status')
                    ->boolean()
                    ->toggleable()
                    ->sortable()
                    ->toggle(),

                CheckboxColumn::make('featured')
                    ->toggleable()
                    ->label('Homepage'),

                TextColumn::make('updated_at')
                    ->since()
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
            'index' => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaq::route('/create'),
            'edit' => Pages\EditFaq::route('/{record}/edit'),
        ];
    }
}
