<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'titulo',
        'slug',
        'contenido',
        'resumen',
        'user_id',
        'fecha_publicacion',
        'estado',
        'imagen_destacada',
        'visitas'
    ];

    protected $casts = [
        'fecha_publicacion' => 'datetime',
    ];

    /**
     * Relación con el autor del post
     */
    public function autor()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Etiquetas asociadas al post
     */
    public function etiquetas()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Galería de imágenes del post
     */
    public function galeria()
    {
        return $this->hasMany(GaleriaPost::class);
    }

    /**
     * Registro detallado de visitas
     */
    public function visitasDetalle()
    {
        return $this->morphMany(Visita::class, 'visitable');
    }

    /**
     * Incrementar contador de visitas con registro detallado
     */
    public function registrarVisita(Request $request)
    {
        $this->increment('visitas');

        Visita::create([
            'visitable_id' => $this->id,
            'visitable_type' => self::class,
            'ip' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'referer' => $request->header('referer'),
        ]);
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
