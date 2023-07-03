<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class SiteSetting extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.site-setting';

    protected static ?string $navigationGroup = 'Setting';

    protected function getHeaderWidgets(): array
    {
        return [
            Widgets\SiteDetailWidgets::class,
            Widgets\PluginWidgets::class,
        ];
    }
}
