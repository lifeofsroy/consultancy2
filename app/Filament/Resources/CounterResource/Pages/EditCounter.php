<?php

namespace App\Filament\Resources\CounterResource\Pages;

use App\Filament\Resources\CounterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCounter extends EditRecord
{
    protected static string $resource = CounterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
