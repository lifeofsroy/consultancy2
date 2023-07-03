<?php

namespace App\Filament\Pages\Widgets;

use App\Models\AboutFeature;
use App\Models\AboutWelcome;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Filament\Widgets\TableWidget as PageWidget;
use Guava\FilamentIconPicker\Tables\IconColumn;

class AboutFeatureWidgets extends PageWidget
{
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getTableQuery(): Builder
    {
        return AboutFeature::query();
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
                    Section::make('Title & Icon')
                        ->schema([
                            TextInput::make('title')
                                ->required(),

                            IconPicker::make('icon')
                                ->columnspan('full')
                                ->required()
                                ->preload(),
                        ])
                        ->collapsed(),

                    Section::make('Description')
                        ->schema([
                            Textarea::make('desc')
                                ->label('Description')
                                ->rows(10)
                                ->reactive()
                                ->required()
                                ->hint(fn ($state, $component) => 'left: ' . $component->getMaxLength() - strlen($state) . ' characters')
                                ->maxlength(800),
                        ])
                        ->collapsed(),
                ])
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            IconColumn::make('icon'),

            TextColumn::make('title')
                ->wrap(),

            TextColumn::make('updated_at')
                ->since()
                ->color('primary')
                ->size('sm')
                ->label('Updated'),
        ];
    }
}
