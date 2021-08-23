<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    //
    protected $table = 'establecimiento';

    public function tipo_establecimiento() {
        return $this->belongsTo(Tipo_establecimiento::class,'id');
    }
}
