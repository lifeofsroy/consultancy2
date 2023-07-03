<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class AboutPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.about-page';

    protected static ?string $navigationGroup = 'Page';

    protected function getHeaderWidgets(): array
    {
        return [
            Widgets\AboutFeatureWidgets::class,
            Widgets\AboutWelcomeWidgets::class,
        ];
    }
}
