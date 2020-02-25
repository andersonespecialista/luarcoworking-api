<?php

namespace App\Http\Controllers\LuarCo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CadastroReservaController extends Controller
{
    public function formShow(){
        return view('luarcoworking.cadastro-reserva');
    }
}
