<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Oficio extends Model
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

    public function getNumeroFormatadoAttribute()
{

    $ano = date('y');


    $numeroFormatado = sprintf('%05d/%s', $this->attributes['numero_oficio'], $ano);


    if ($this->attributes['numero_oficio'] > 0) {
        return $numeroFormatado;
    } else {
        return '';
    }

}
}
