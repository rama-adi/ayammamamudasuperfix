<?php

namespace App\Models;

use Brick\Math\Exception\NumberFormatException;
use Brick\Money\Exception\UnknownCurrencyException;
use Brick\Money\Money;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @throws UnknownCurrencyException
     * @throws NumberFormatException
     */

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function formattedAmount(): Attribute
    {

        // Atribut ini digunakan untuk mengubah format harga
        // dari integer menjadi format mata uang Indonesia
        return Attribute::get(
            fn() => Money::of($this->amount, 'IDR')
                ->formatTo('id_ID')
        );
    }
}
