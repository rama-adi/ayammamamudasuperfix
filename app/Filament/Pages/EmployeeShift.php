<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;

class EmployeeShift extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationGroup = 'CMS';
    protected static string $view = 'filament.pages.employee-shift';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('addShift')
                ->label('Add Shift')
                ->icon('heroicon-o-plus')
                ->modalWidth('lg')
                ->form([
                    TextInput::make('name')
                        ->label('Employee Name'),
                    DateTimePicker::make('start_at')
                        ->label('Start at'),
                    DateTimePicker::make('end_at')
                        ->label('End at')
                ])
                ->action(function (array $data) {
                    \App\Models\EmployeeShift::create([
                        'name' => $data['name'],
                        'start_at' => $data['start_at'],
                        'end_at' => $data['end_at']
                    ]);
                })
        ];
    }
}
