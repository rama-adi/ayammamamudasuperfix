<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Filament\Resources\PaymentResource\Pages\EditPayment;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrder extends EditRecord
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('Lihat Bukti Pembayaran')
                ->color('success')
                ->url(fn () => EditPayment::getUrl(['record' => $this->getRecord()->payment])),
        ];
    }
}
