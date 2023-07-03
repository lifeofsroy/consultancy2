<?php

namespace App\Filament\Pages\Widgets;

use App\Models\AboutFeature;
use App\Models\AboutWelcome;
use App\Models\ContactInfo;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\TableWidget as PageWidget;
use Guava\FilamentIconPicker\Tables\IconColumn;

class ContactInfoWidgets extends PageWidget
{
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getTableQuery(): Builder
    {
        return ContactInfo::query();
    }

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }

    protected function getTableActions(): array
    {
        return [
            EditAction::make()
                ->form([
                    Grid::make(2)
                        ->schema([
                            TextInput::make('phone')
                                ->required(),

                            TextInput::make('email')
                                ->required(),
                        ]),

                    Grid::make(1)
                        ->schema([
                            TextInput::make('address')
                                ->required(),
                        ]),

                    Grid::make(1)
                        ->schema([
                            Textarea::make('mapurl')
                                ->required(),
                        ]),
                ])
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('phone')
                ->wrap(),

            TextColumn::make('email')
                ->wrap(),

            TextColumn::make('address')
                ->wrap(),

            TextColumn::make('updated_at')
                ->since()
                ->color('primary')
                ->size('sm')
                ->label('Updated'),
        ];
    }
}
