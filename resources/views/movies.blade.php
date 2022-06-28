<h1>
    Lista dei film
</h1>
<ul>
    @foreach ($movies as $movie)
        <li>
            <h3>{{ $movie->title }}</h3>
            <p>{{ $movie->original_title }}</p>
            <p>Anno: {{ $movie->date }}</p>
            <p>Nazionalità: {{ $movie->nationality }}</p>
            <p>Voto: {{ $movie->vote }}</p>
        </li>
    @endforeach
</ul>