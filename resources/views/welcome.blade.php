<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel model controller movies</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

                    @foreach ($movies as $singleMovie)
                        <div class="col my-4">
                            <div class="p-2 border">
                                <span>#{{ $singleMovie->id }}</span>
                                <div class="text-center">
                                    <img class="mb-3" src="https://via.placeholder.com/200" alt="Placeholder">
                                </div>

                                <div class="film-info">
                                    <h2>{{ $singleMovie->title }}</h2>
                                    <p>TITOLO ORIGINALE: {{ $singleMovie->original_title }}</p>
                                    <p>NAZIONALITA': {{ $singleMovie->nationality }}</p>
                                    <p>DATA: {{ $singleMovie->date }}</p>
                                    <p>VOTO: {{ $singleMovie->vote }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                
                </div>
            </div>
        </main>

    </body>
</html>
