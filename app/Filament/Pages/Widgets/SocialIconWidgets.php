<?php

namespace App\Filament\Pages\Widgets;

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
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\TableWidget as PageWidget;
use Guava\FilamentIconPicker\Tables\IconColumn;

class SocialIconWidgets extends PageWidget
{
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getTableQuery(): Builder
    {
        return SocialIcon::query();
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
                            Select::make('icon')
                                ->searchable()
                                ->required()
                                ->options([
                                    'fa-facebook-f' => 'Facebook',
                                    'fa-twitter' => 'Twitter',
                                    'fa-linkedin-in' => 'Linkedin',
                                    'fa-whatsapp' => 'Whatsapp',
                                    'fa-youtube' => 'Youtube',
                                ]),

                            TextInput::make('url')
                                ->required(),
                        ]),
                ])
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('icon')
                ->wrap(),

            TextColumn::make('url')
                ->wrap(),

            TextColumn::make('updated_at')
                ->since()
                ->color('primary')
                ->size('sm')
                ->label('Updated'),
        ];
    }
}
