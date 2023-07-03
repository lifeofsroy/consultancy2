<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Slider;
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
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use Nuhel\FilamentCropper\Components\Cropper;
use App\Filament\Resources\SliderResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SliderResource\RelationManagers;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

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

                                TextInput::make('subtitle')
                                    ->required(),
                            ]),
                    ]),

                Card::make()
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                TextInput::make('url')
                                    ->label('Button URL'),

                                TextInput::make('video')
                                    ->label('Video URL'),
                            ]),
                    ]),

                Card::make()
                    ->schema([
                        Cropper::make('image')
                            ->label('Background Image')
                            ->required()
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                return (string)str("slider/image" . $file->hashName());
                            })->enableDownload()
                            ->enableOpen()
                            ->zoomable(true)
                            ->enableZoomButtons()
                            ->enableImageRotation()
                            ->enableImageFlipping()
                            ->imageResizeTargetWidth('1920')
                            ->imageResizeTargetHeight('850'),
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

                SelectColumn::make('type')
                    ->options([
                        'left' => 'Left',
                        'middle' => 'Middle',
                        'right' => 'Right',
                    ])
                    ->disablePlaceholderSelection(),

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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}
