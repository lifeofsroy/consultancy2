<?php

namespace App\Filament\Resources\CourseCommentResource\Pages;

use App\Filament\Resources\CourseCommentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCourseComment extends CreateRecord
{
    protected static string $resource = CourseCommentResource::class;
}
