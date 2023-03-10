<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 align-items-center">

                    @foreach ($movies as $singleMovie)
                        <div class="col">
                            <div class="p-3 border">
                                <h2>{{ $singleMovie->title }}</h2>
                                <p>DESCRIZIONE: {{ $singleMovie->original_title }}</p>
                                <p>NAZIONALITA': {{ $singleMovie->nationality }}</p>
                                <p>DATA: {{ $singleMovie->date }}</p>
                                <p>VOTO: {{ $singleMovie->vote }}</p>
                            </div>
                        </div>
                    @endforeach
                
                </div>
            </div>
        </main>

    </body>
</html>
