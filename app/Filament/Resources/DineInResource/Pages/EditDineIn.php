<?php

namespace App\Filament\Resources\DineInResource\Pages;

use App\Filament\Resources\DineInResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDineIn extends EditRecord
{
    protected static string $resource = DineInResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
