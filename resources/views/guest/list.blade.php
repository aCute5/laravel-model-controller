@foreach ($movies as $movie)
    <h1>
        {{$movie->title}}
    </h1>
    <h4>{{$movie->nationality}}</h4>
    <h5>{{$movie->date}}</h5>
@endforeach
