<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script>
        window.onload = function () {
          var clockElement = document.getElementById( "clock" );

          function updateClock ( clock ) {
            clock.innerHTML = new Date().toLocaleTimeString();
          }

          setInterval(function () {
              updateClock( clockElement );
          }, 1000);

        }

        </script>
        <link rel="stylesheet" href="styles.css">
      </head>
        <body>
          @yield('content')
        </body>
      </html>
