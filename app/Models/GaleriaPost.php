<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaleriaPost extends Model
{
    protected $fillable = ['post_id', 'ruta_imagen', 'texto_alternativo', 'titulo_imagen', 'orden'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
