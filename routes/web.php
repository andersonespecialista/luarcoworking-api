<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	
	//return view('luarcoworking.cadastro-reserva');
});

Route::get('te', function () {
    return 'JESUS CRISTO É O SENHOR';
});

/*
    LUAR COWORKING 
*/
Route::get('form-reserva', 'LuarCo\CadastroReservaController@formShow');

Route::post('api/reserva/escritorio', 'Reservas\ReservaEscritorioController@cadReserva');


