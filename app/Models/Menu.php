<?php

namespace App\Models;

use Brick\Math\Exception\NumberFormatException;
use Brick\Math\Exception\RoundingNecessaryException;
use Brick\Money\Exception\UnknownCurrencyException;
use Brick\Money\Money;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @throws UnknownCurrencyException
     * @throws NumberFormatException
     */
    public function formattedPrice(): Attribute
    {

        // Atribut ini digunakan untuk mengubah format harga
        // dari integer menjadi format mata uang Indonesia
        return Attribute::get(
            fn() => Money::of($this->price, 'IDR')
                ->formatTo('id_ID')
        );
    }
}
