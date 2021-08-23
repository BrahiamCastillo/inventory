<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $table = 'empleado';
    
    protected $fillable = ['nombre'];
    public $timestamps = false;

    public function rol_empleado() {
        return $this->belongsTo(Rol_Empleado::class,'rol_empleados_id');
    }

    public function establecimiento() {
        return $this->belongsTo(Establecimiento::class,'establecimiento_id');
    }
}
