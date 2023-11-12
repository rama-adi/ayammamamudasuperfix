<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Menu extends Model
{
    use HasFactory;
    protected $fillable = ['harga'];
    public function menus(){
        return $this->belongsTo(Menu::class);
    }
    public function types(){
        return $this->belongsTo(Type::class);
    }
}
