<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FutMag / {{$player["name"]??'error'}}</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/normalize.min.css">
        <link rel="stylesheet" href="/css/master.css">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="container">

      <h1>{{$player["name"]??'error'}}</h1>
      <a href="{{ URL::previous() }}">
        <span>regresar</span>
      </a>
      <h2>Datos</h2>
      <div class="row">
        <div class="col">
          <span>{{$player["dateOfBirth"]??''}}</span>
        </div>
        <div class="col">
          <span>{{$player["nationality"]??''}}</span>
        </div>
        <div class="col">
          <span>{{$player["position"]??''}}</span>
        </div>
      </div>
      <div class="row">
        <div class="col">
        </div>
        <div class="col-auto">
          <span>ultima actualización: {{$player["lastUpdated"]??''}}</span>
        </div>
      </div>
    </body>
    </html>
