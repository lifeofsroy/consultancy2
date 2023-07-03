<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Gallery;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Livewire\TemporaryUploadedFile;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\CheckboxColumn;
use Nuhel\FilamentCropper\Components\Cropper;
use App\Filament\Resources\GalleryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GalleryResource\RelationManagers;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->required(),

                                TextInput::make('location')
                                    ->required(),
                            ]),
                    ])
                    ->columnspan('full'),

                Card::make()
                    ->schema([
                        Cropper::make('image')
                            ->label('User Image')
                            ->required()
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                return (string)str("gallery/image" . $file->hashName());
                            })->enableDownload()
                            ->enableOpen()
                            ->zoomable(true)
                            ->enableZoomButtons()
                            ->enableImageRotation()
                            ->enableImageFlipping()
                            ->imageResizeTargetWidth('391')
                            ->imageResizeTargetHeight('391'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->toggleable(),

                TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->toggleable()
                    ->wrap(),

                TextColumn::make('location')
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
                    ->label('Footer'),

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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
