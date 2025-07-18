<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['name', 'slug', 'descripcion'];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

   
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
