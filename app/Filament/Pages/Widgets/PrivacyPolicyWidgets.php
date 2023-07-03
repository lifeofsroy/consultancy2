<?php

namespace App\Filament\Pages\Widgets;

use App\Models\SocialIcon;
use App\Models\ContactInfo;
use App\Models\AboutFeature;
use App\Models\AboutWelcome;
use App\Models\PrivacyPolicy;
use App\Models\TermCondition;
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
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PrivacyPolicyWidgets extends PageWidget
{
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getTableQuery(): Builder
    {
        return PrivacyPolicy::query();
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
                    TextInput::make('title')
                        ->required(),

                    TinyEditor::make('desc')
                        ->label('Description')
                        ->required(),
                ])
        ];
    }

    protected function getTableColumns(): array
    {
        return [
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
