<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie | homepage</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    
    <h1>LISTA FILM:</h1>
    <div class="container">
        @foreach ($movies as $movie)
            <div class="movie-card">
                <ul>
                    <li>
                        <h3>Titolo: {{$movie->title}}</h3>
                        <h3>Titolo originale: {{$movie->original_title}}</h3>
                        <p>Paese: {{$movie->nationality}}</p>
                        <small>Anno: {{$movie->date}}</small> | <small>Voto: {{$movie->vote}}</small>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
</body>
</html>