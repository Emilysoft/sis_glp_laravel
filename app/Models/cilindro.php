<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cilindro extends Model
{
    use HasFactory;
    protected $table = 'cilindros';

    public function guias(){
        return $this->hasMany(guia::class);
    }




}
