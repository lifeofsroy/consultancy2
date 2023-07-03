<?php

namespace App\Filament\Pages\Widgets;

use App\Models\SiteDetail;
use App\Models\SocialIcon;
use App\Models\ContactInfo;
use App\Models\AboutFeature;
use App\Models\AboutWelcome;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use Filament\Widgets\TableWidget as PageWidget;
use Guava\FilamentIconPicker\Tables\IconColumn;

class SiteDetailWidgets extends PageWidget
{
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getTableQuery(): Builder
    {
        return SiteDetail::query();
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
                    Section::make('Title, Description & Keywords')
                        ->schema([
                            Grid::make(1)
                                ->schema([
                                    TextInput::make('site_title')
                                        ->label('Title')
                                        ->required(),

                                    Textarea::make('site_desc')
                                        ->required()
                                        ->label('Description')
                                        ->rows(2),

                                    TextInput::make('site_keys')
                                        ->label('Keywords')
                                        ->required(),
                                ]),
                        ])
                        ->collapsed(),

                    Section::make('Colors')
                        ->schema([
                            Grid::make(3)
                                ->schema([
                                    ColorPicker::make('title_color')
                                        ->required(),

                                    ColorPicker::make('button_color')
                                        ->required(),

                                    ColorPicker::make('active_color')
                                        ->required(),

                                    ColorPicker::make('beard_color')
                                        ->required(),

                                    ColorPicker::make('icon_color')
                                        ->required(),

                                    ColorPicker::make('tab_color')
                                        ->required(),
                                ]),
                        ])
                        ->collapsed(),
                ])
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('site_title')
                ->wrap(),

            ColorColumn::make('title_color')
                ->label('Title'),

            ColorColumn::make('button_color')
                ->label('Button'),

            ColorColumn::make('active_color')
                ->label('Active'),

            ColorColumn::make('beard_color')
                ->label('Beardcrumb'),

            ColorColumn::make('icon_color')
                ->label('Icon'),

            ColorColumn::make('tab_color')
                ->label('Tab'),

            TextColumn::make('updated_at')
                ->since()
                ->color('primary')
                ->size('sm')
                ->label('Updated'),
        ];
    }
}
