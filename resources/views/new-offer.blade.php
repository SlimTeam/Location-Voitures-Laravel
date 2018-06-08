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
        <h1>Je fais louer mon véhicule</h1>
        <form method="POST" action="/offer/create">
            @csrf
            Titre de l'offre:
            <input type="text" name="title">
            <br>
            Intervales de disponibilité:
            <ul id="interval-inputs"></ul>
            @include('intervals')
            <button class="add-interval-btn">ajouter interval</button>
            <input type="submit" value="publier l'offre" >
        </form>
    </body>
</html>


<script>
    $(document).ready(function(){

        $('.add-interval-btn').click(function(e){
            console.log('click');
        e.preventDefault();
        var intervalId = $(".intervals-list").length;
        $.ajax({
            type: 'GET',
            url : "/interval/new/"+intervalId,
            success : function (data) {
                $(".intervals-list").append("<li>"+data+"</li>");
            }
        });
        });
    });


</script>
