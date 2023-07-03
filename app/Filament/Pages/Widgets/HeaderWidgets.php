<?php

namespace App\Filament\Pages\Widgets;

use App\Models\SiteDetail;
use App\Models\SocialIcon;
use App\Models\ContactInfo;
use App\Models\AboutFeature;
use App\Models\AboutWelcome;
use App\Models\Header;
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

class HeaderWidgets extends PageWidget
{
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getTableQuery(): Builder
    {
        return Header::query();
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
                    Card::make()
                        ->schema([
                            Grid::make(2)
                                ->schema([
                                    TextInput::make('phone')
                                        ->required(),

                                    TextInput::make('email')
                                        ->required(),
                                ]),
                        ]),

                    Card::make()
                        ->schema([
                            FileUpload::make('logo')
                                ->directory('page/welcome')
                                ->image()
                                ->enableOpen()
                                ->enableDownload()
                                ->required()
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
            ImageColumn::make('logo')
                ->label('Header Logo'),

            TextColumn::make('phone')
                ->wrap(),

            TextColumn::make('email')
                ->wrap(),

            TextColumn::make('updated_at')
                ->since()
                ->color('primary')
                ->size('sm')
                ->label('Updated'),
        ];
    }
}
