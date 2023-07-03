<?php

namespace App\Filament\Pages\Widgets;

use App\Models\Footer;
use App\Models\Plugin;
use App\Models\PageTitle;
use App\Models\SiteDetail;
use App\Models\SocialIcon;
use App\Models\ContactInfo;
use App\Models\AboutFeature;
use App\Models\AboutWelcome;
use App\Models\SectionTitle;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use Filament\Widgets\TableWidget as PageWidget;
use Guava\FilamentIconPicker\Tables\IconColumn;

class PluginWidgets extends PageWidget
{
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getTableQuery(): Builder
    {
        return Plugin::query();
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
                                    TextInput::make('ph_no')
                                        ->label('Phone No')
                                        ->required(),

                                    TextInput::make('wh_no')
                                        ->label('Whatsapp No')
                                        ->required(),
                                ]),
                        ]),

                    Card::make()
                        ->schema([
                            TextInput::make('tw_id')
                                ->label('Tawk SRC')
                                ->required(),
                        ]),
                ])
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            ToggleColumn::make('is_ph')
                ->label('Phone'),

            TextColumn::make('ph_no')
                ->label('Phone No')
                ->wrap(),

            ToggleColumn::make('is_wh')
                ->label('Whatsapp'),

            TextColumn::make('wh_no')
                ->label('Whatsapp No')
                ->wrap(),

            ToggleColumn::make('is_tw')
                ->label('Tawk'),

            TextColumn::make('updated_at')
                ->since()
                ->color('primary')
                ->size('sm')
                ->label('Updated'),
        ];
    }
}
