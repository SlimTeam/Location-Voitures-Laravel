<h1> Offres correspondantes</h1>
@foreach ($offers as $offer)
    <li>
        {{$offer->title}}
    </li>
@endforeach
