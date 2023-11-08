<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oficio extends Model
{
    protected $table ='oficios';

    protected $fillable =[
        'destino',
        'assunto',
        'data',
        'setor_id',
        'autorizado',
        'numero_oficio',
    ];

    public function getAutorizadoAttribute($value)
    {
        return $value ? 'sim' : 'não';
    }

    public function setDataAttribute($value)
    {
        $this->attributes['data'] = $value;
    }
}
