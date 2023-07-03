<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class TitleSetting extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.title-setting';

    protected static ?string $navigationGroup = 'Setting';

    protected function getHeaderWidgets(): array
    {
        return [
            Widgets\PageTitleWidgets::class,
            Widgets\SectionTitleWidgets::class,
        ];
    }
}
