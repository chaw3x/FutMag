<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FootballController;
use App\Mail\JugadorFavorito;
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
    return view('welcome');
});

Route::get('liga', [FootballController::class, 'liga']);
Route::get('teams/{id}', [FootballController::class, 'team']);
Route::get('player/{id}', [FootballController::class, 'player']);
Route::post('sent', [FootballController::class, 'envio']);
Route::get('/correo', function()
    {
        return new JugadorFavorito([
            'name'=>'Jugador 1',
            'date'=>'1990-01-01',
        ]);
    });
