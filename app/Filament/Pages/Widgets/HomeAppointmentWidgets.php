<?php

namespace App\Filament\Pages\Widgets;

use App\Models\SocialIcon;
use App\Models\ContactInfo;
use App\Models\HomeFeature;
use App\Models\HomeWelcome;
use App\Models\AboutFeature;
use App\Models\AboutWelcome;
use App\Models\PrivacyPolicy;
use App\Models\TermCondition;
use App\Models\HomeAppointment;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Filament\Widgets\TableWidget as PageWidget;
use Guava\FilamentIconPicker\Tables\IconColumn;

class HomeAppointmentWidgets extends PageWidget
{
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getTableQuery(): Builder
    {
        return HomeAppointment::query();
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
                    Section::make('Title & Image')
                        ->schema([
                            TextInput::make('title')
                                ->required(),

                            FileUpload::make('image')
                                ->directory('about/welcome')
                                ->image()
                                ->enableOpen()
                                ->enableDownload()
                                ->imageResizeMode('cover')
                                ->imageResizeTargetWidth('629')
                                ->imageResizeTargetHeight('583'),
                        ])
                        ->collapsed(),

                    Section::make('Section 1')
                        ->schema([
                            Grid::make(1)
                                ->schema([
                                    TextInput::make('title1')
                                        ->required(),

                                    Grid::make(2)
                                        ->schema([
                                            Textarea::make('text1')
                                                ->required(),

                                            IconPicker::make('icon1')
                                                ->required()
                                                ->preload(),
                                        ]),

                                ]),
                        ])
                        ->collapsed(),

                    Section::make('Section 2')
                        ->schema([
                            Grid::make(1)
                                ->schema([
                                    TextInput::make('title2')
                                        ->required(),

                                    Grid::make(2)
                                        ->schema([
                                            Textarea::make('text2')
                                                ->required(),

                                            IconPicker::make('icon2')
                                                ->required()
                                                ->preload(),
                                        ]),

                                ]),
                        ])
                        ->collapsed(),
                ])
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            ImageColumn::make('image'),

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
