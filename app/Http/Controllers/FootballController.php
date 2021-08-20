<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// require_once 'HTTP/Request2.php';
use Http;
class FootballController extends Controller
{
  public function liga(request $request)
  {
    $response = Http::withHeaders([
      "X-Auth-Token"=>env('FOOTBALL_KEY'),
    ])->get('http://api.football-data.org/v2/competitions/EC/teams/');
    $liga=$response->json();
    return view('liga',compact('liga'));
  }
  public function team(request $request)
  {
    $response = Http::withHeaders([
      "X-Auth-Token"=>env('FOOTBALL_KEY'),
    ])->get('http://api.football-data.org/v2/teams/'.$request->id);
    $team=$response->json();
    // dd($team);
    return view('team',compact('team'));
  }
  public function player(request $request)
  {
    $response = Http::withHeaders([
      "X-Auth-Token"=>env('FOOTBALL_KEY'),
    ])->get('http://api.football-data.org/v2/players/'.$request->id);
    $player=$response->json();
    return view('player',compact('player'));
  }
}
