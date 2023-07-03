<?php

namespace App\Filament\Pages\Widgets;

use App\Models\SiteDetail;
use App\Models\SocialIcon;
use App\Models\ContactInfo;
use App\Models\AboutFeature;
use App\Models\AboutWelcome;
use App\Models\PageTitle;
use App\Models\SectionTitle;
use Filament\Forms\Components\Card;
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

class PageTitleWidgets extends PageWidget
{
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getTableQuery(): Builder
    {
        return PageTitle::query();
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
                    TextInput::make('page')
                        ->disabled()
                        ->label('Page Name'),

                    Card::make()
                        ->schema([
                            Grid::make(2)
                                ->schema([
                                    TextInput::make('title')
                                        ->required(),

                                    TextInput::make('heading')
                                        ->required(),
                                ]),
                        ]),

                    Card::make()
                        ->schema([
                            FileUpload::make('image')
                                ->directory('page/welcome')
                                ->image()
                                ->enableOpen()
                                ->enableDownload()
                                ->imageResizeMode('cover')
                                ->imageResizeTargetWidth('629')
                                ->imageResizeTargetHeight('583'),
                        ]),
                ])
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            ImageColumn::make('image'),

            TextColumn::make('page')
                ->wrap(),

            TextColumn::make('title')
                ->wrap(),

            TextColumn::make('heading')
                ->wrap(),

            TextColumn::make('updated_at')
                ->since()
                ->color('primary')
                ->size('sm')
                ->label('Updated'),
        ];
    }
}
