<?php

namespace App\Http\Controllers\Reservas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ReservaEscritorio;

class ReservaEscritorioController extends Controller
{
    public function cadReserva(Request $request){
        $params = $request->all();

        
        try{
            $retorno = ReservaEscritorio::create($params);
            return response()->json(['ReservaEscritorio' => $retorno]);
        }catch(Exception $exception){
            return response()->json(['ReservaEscritorioException' => $e], 443);
        }
        
    }
}
