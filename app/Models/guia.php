<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guia extends Model
{
    use HasFactory;
    protected $table = 'guias';

    public function supervisor(){
        return $this->belongsTo(supervisor::class);
    }

}
