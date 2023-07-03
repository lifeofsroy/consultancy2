<?php

namespace App\Filament\Pages\Widgets;

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
use Filament\Widgets\TableWidget as PageWidget;

class AboutWelcomeWidgets extends PageWidget
{
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getTableQuery(): Builder
    {
        return AboutWelcome::query();
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
                            TextInput::make('section')
                                ->required(),

                            TextInput::make('title')
                                ->required(),
                        ]),

                    Section::make('Images')
                        ->schema([
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
            TextColumn::make('section')
                ->wrap(),

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
