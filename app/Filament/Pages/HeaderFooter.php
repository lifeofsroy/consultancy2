<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class HeaderFooter extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.header-footer';

    protected static ?string $navigationGroup = 'Setting';

    protected function getHeaderWidgets(): array
    {
        return [
            Widgets\HeaderWidgets::class,
            Widgets\FooterWidgets::class,
        ];
    }
}
