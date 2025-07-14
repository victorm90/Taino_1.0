<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaProducto extends Model
{
    protected $fillable = [
        'producto_id',
        'tipo_media',
        'ruta_media',
        'texto_alternativo',
        'es_principal',
        'orden'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
