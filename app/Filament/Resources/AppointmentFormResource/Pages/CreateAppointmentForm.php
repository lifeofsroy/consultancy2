<?php

namespace App\Filament\Resources\AppointmentFormResource\Pages;

use App\Filament\Resources\AppointmentFormResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAppointmentForm extends CreateRecord
{
    protected static string $resource = AppointmentFormResource::class;
}
