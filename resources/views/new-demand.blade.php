<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <title>Location voiture laravel</title>

    </head>
    <body>
        <h1>Je cherche un véhicule à louer</h1>
        <form method="POST" action="/demand/create">
            @csrf
            Intervale de disponibilité:
            <ul id="interval-inputs"></ul>
            @include('intervals')
            <input type="submit" value="rechercher" >
        </form>
    </body>
</html>
