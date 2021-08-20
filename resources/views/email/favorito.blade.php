<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>Jugador</title>
  </head>
  <body>
    <h1>El jugador seleccionado</h1>
    {{$data["name"]??''}}
    <br>
    {{$data["date"]??''}}
  </body>
</html>
