<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'deskripsi','fotomenu'];
    public function types(){
        return $this->belongsToMany(Type::class);
       }
}
