<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pathana</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@100;200;300;500&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
        <!-- Styles -->

    </head>
    <body class="antialiased">
        <h1>PATHANA SCHOOL</h1>
        <hr>
        <div id="app-vue">

        </div>



        <script src="{{ mix('js/app.js') }}" ></script>
    </body>
</html>
