<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comuna extends Model
{
    use HasFactory;
    protected $table = 'comunas';

    public function establecimientos(){
        return $this->hasMany(establecimiento::class);
    }



}
