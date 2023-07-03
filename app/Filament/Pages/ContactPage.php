<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ContactPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.contact-page';

    protected static ?string $navigationGroup = 'Page';

    protected function getHeaderWidgets(): array
    {
        return [
            Widgets\ContactInfoWidgets::class,
            Widgets\SocialIconWidgets::class,
        ];
    }
}
