<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supervisor extends Model
{
    use HasFactory;
    protected $table = 'supervisores';
    public function establecimientos(){
        return $this->hasMany(establecimiento::class);
    }

    public function comuna(){
        return $this->hasMany(comuna::class);
    }




}
