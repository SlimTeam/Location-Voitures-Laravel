<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Location voiture laravel</title>

    </head>
    <body>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        <h1>Location voiture laravel</h1>
        <ul>
            <li><a href="{{ url('offer/new') }}">Je fais louer mon véhicule</a></li>
            <li><a href="{{ url('demand/new') }}">Je cherche un véhicule à louer</a></li>
            <li><a href="{{ url('admin') }}">Administration</a></li>
        </ul>
    </body>
</html>
