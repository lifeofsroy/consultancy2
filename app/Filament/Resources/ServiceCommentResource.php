<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\ServiceComment;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Yepsua\Filament\Forms\Components\Rating;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ServiceCommentResource\Pages;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use App\Filament\Resources\ServiceCommentResource\RelationManagers;

class ServiceCommentResource extends Resource
{
    protected static ?string $model = ServiceComment::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Service';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Select::make('service_id')
                                    ->relationship('service', 'title')
                                    ->label('Service'),

                                Select::make('user_id')
                                    ->relationship('user', 'name')
                                    ->label('User'),
                            ]),
                    ])
                    ->columnspan('full'),

                Card::make()
                    ->schema([
                        Rating::make('rating')
                            ->options([
                                'Poor',
                                'Acceptable',
                                'Good',
                                'Very Good',
                                'Excellent',
                            ])
                            ->effects(false),

                        Textarea::make('desc')
                            ->reactive()
                            ->required(),
                    ])
                    ->columnspan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('service.title')
                    ->wrap()
                    ->sortable()
                    ->toggleable()
                    ->searchable(),

                TextColumn::make('user.name')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),

                IconColumn::make('status')
                    ->boolean()
                    ->toggleable()
                    ->sortable()
                    ->toggle(),

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
                SelectFilter::make('service_id')
                    ->relationship('service', 'title')
                    ->label('Filter By Service'),
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
            'index' => Pages\ListServiceComments::route('/'),
            'create' => Pages\CreateServiceComment::route('/create'),
            'edit' => Pages\EditServiceComment::route('/{record}/edit'),
        ];
    }
}
