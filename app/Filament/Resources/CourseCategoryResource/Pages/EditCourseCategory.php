<?php

namespace App\Filament\Resources\CourseCategoryResource\Pages;

use App\Filament\Resources\CourseCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCourseCategory extends EditRecord
{
    protected static string $resource = CourseCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
