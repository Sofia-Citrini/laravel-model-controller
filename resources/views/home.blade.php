@vite('resources/js/app.js')

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel-model-controller</title>
</head>

<body>
    <main class="container pb-3">
        <h1 class="text-center py-4">MOVIES</h1>

        <div class="row g-4">
            @foreach ($movies as $movie)
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">{{$movie->title}}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                          <div class="card-text">Data di uscita: {{$movie->date}}</div>
                          <div class="card-text">Voto: {{$movie->vote}}</div>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>