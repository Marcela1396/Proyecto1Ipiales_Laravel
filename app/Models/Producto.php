<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    public function category(){
        return $this->belongsTo(Categoria::class,'categoria','id');
    }

    public function stock(){
        return $this->cantidadProducto <= 10;
    }

    public static function findPrice($price){
        return static::where('precioProducto','=', $price)->first();
    }
}
