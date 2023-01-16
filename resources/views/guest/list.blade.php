@foreach ($movies as $movie)
    <div class="card">
        <h1 class="movie-title">
            {{$movie->title}}
        </h1>
        <h4 class="nation">{{$movie->nationality}}</h4>
        <h5 class="date">{{$movie->date}}</h5>
    </div>
@endforeach
