<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaEscritorio extends Model
{
    protected $table = 'lv_reservas_escritorio';
    public $timestamps = true;
    protected $fillable = [
        'nome',
        'email',
        'tel',
        'cel'
    ];
}
