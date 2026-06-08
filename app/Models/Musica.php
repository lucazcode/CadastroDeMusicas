<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    protected $fillable = [
        'titulo',
        'artista',
        'plataforma',
        'produtora',
        'genero',
        'data_lancamento',
        'distribuidora',
    ];
}