<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $casts = [
        'content' => 'json'
    ];
    public function user()
    {

        return $this->belongsTo(User::class);
    }
}
