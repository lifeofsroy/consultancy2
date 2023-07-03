<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\AppointmentForm;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AppointmentFormResource\Pages;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use App\Filament\Resources\AppointmentFormResource\RelationManagers;

class AppointmentFormResource extends Resource
{
    protected static ?string $model = AppointmentForm::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Request';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('name')
                                    ->required(),

                                TextInput::make('email')
                                    ->required(),

                                TextInput::make('phone')
                                    ->required(),
                            ]),
                    ]),

                Card::make()
                    ->schema([

                        Grid::make(2)
                            ->schema([
                                Select::make('service_id')
                                    ->relationship('service', 'title')
                                    ->label('Service'),

                                DateTimePicker::make('datetime')
                                    ->required()
                                    ->label('Appointment Date & Time')
                                    ->withoutSeconds()
                                    ->minDate(now())
                                    ->displayFormat('F j, Y - g:i a')
                                    ->timezone('Asia/Kolkata'),
                            ]),
                    ]),

                Card::make()
                    ->schema([
                        Textarea::make('msz')
                            ->label('Message')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),

                TextColumn::make('service.title')
                    ->sortable()
                    ->toggleable()
                    ->searchable()
                    ->wrap(),

                TextColumn::make('datetime')
                    ->date('M j, Y - g:i a')
                    ->sortable()
                    ->searchable()
                    ->toggleable()
                    ->color('success')
                    ->size('sm')
                    ->label('Date & Time'),

                TextColumn::make('updated_at')
                    ->since()
                    ->sortable()
                    ->searchable()
                    ->toggleable()
                    ->color('primary')
                    ->size('sm')
                    ->label('Updated'),
            ])
            ->filters([
                SelectFilter::make('service_id')
                    ->relationship('service', 'title')
                    ->label('Filter By Service'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),

                FilamentExportBulkAction::make('export')
                    ->label('Export Selected'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppointmentForms::route('/'),
            'create' => Pages\CreateAppointmentForm::route('/create'),
            'edit' => Pages\EditAppointmentForm::route('/{record}/edit'),
        ];
    }
}
