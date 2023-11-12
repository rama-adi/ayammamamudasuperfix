<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

   protected $fillable = ['nama', 'foto'];
   public function menus(){
    return $this->belongsToMany(Menu::class);
   }
}
