<h1>Offres</h1>
@foreach ($offers as $offer)
    <li>
        {{$offer->title}}
    </li>
@endforeach

<h1>Demandes</h1>
@foreach ($demands as $demand)
    <li>
        {{$demand->start_date}} -> {{$demand->end_date}} (<a href="demand/search/{{$demand->id}}">voir les offres</a>)
    </li>
@endforeach
