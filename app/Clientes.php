<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'lv_clientes'; // nome da tabela
    public $timestamps = false; // Desativa timestamps

    protected $fillable = [
        'nome',
        'email',
        'doc',
        'doc_tipo',
        'data_nascimento'
    ];
}
