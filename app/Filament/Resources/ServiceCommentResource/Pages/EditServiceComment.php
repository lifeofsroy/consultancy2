<?php

namespace App\Filament\Resources\ServiceCommentResource\Pages;

use App\Filament\Resources\ServiceCommentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceComment extends EditRecord
{
    protected static string $resource = ServiceCommentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
