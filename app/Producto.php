<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'producto';

    protected $fillable = ['producto'];

    public $timestamps = false;

    public function negocios() {

        return $this->hasMany(Producto_Establecimientos::class, 'id_producto');
    }
}
