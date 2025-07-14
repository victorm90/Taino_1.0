<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Producto extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'descripcion',
        'caracteristicas',
        'precio',
        'precio_descuento',
        'cantidad_stock',
        'sku',
        'categoria_id',
        'destacado',
        'disponible',
        'visitas'
    ];

    protected $casts = [
        'precio' => 'decimal:2',
        'precio_descuento' => 'decimal:2',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function medios()
    {
        return $this->hasMany(MediaProducto::class);
    }

    public function imagenPrincipal()
    {
        return $this->hasOne(MediaProducto::class)->where('es_principal', true);
    }

    public function visitasDetalle()
    {
        return $this->morphMany(Visita::class, 'visitable');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

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
}
