<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    //
    protected $table = 'establecimiento';

    public function tipo_establecimiento() {
        return $this->belongsTo(Tipo_establecimiento::class,'tipos_establecimientos_id');
    }

    public function productos() {
        return $this->hasMany(Productos_Establecimiento::class, 'establecimientos_id');
    }
}
