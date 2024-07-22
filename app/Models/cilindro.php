<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class cilindro extends Model
{
    use HasFactory;
    protected $table = 'cilindros';

    public function guias(){
        return $this->hasMany(guia::class);
    }




}
