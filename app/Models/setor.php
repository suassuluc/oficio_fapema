<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setor extends Model
{
    protected $table ='setor';

    protected $fillable =[
        'nome',
    ];
}
