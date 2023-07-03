<?php

namespace App\Filament\Resources\AdmissionFormResource\Pages;

use App\Filament\Resources\AdmissionFormResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdmissionForm extends EditRecord
{
    protected static string $resource = AdmissionFormResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
