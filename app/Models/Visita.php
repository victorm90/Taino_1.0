<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $fillable = [
        'visitable_id',
        'visitable_type',
        'ip',
        'user_agent',
        'referer'
    ];

    public function visitable()
    {
        return $this->morphTo();
    }
}
