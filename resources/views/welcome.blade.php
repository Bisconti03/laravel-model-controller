<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main class="bg-dark">
            <div class="container">
                <div class="row">
                    @foreach ($movies as $movie)
                    <div class="col-3 ">

                        <div class="card h-100 border-0 bg-transparent" >
                            <div class="card-body text-white">
                                
                                <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/81gn-wiHljL._AC_UL320_.jpg" class="card-img-top w-100 pb-3" alt="">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <p class="card-text"> Original Title: {{ $movie->original_title }}  </p>
                                <p class="card-text"> Nazionality: {{ $movie->nationality }}  </p>
                                <p class="card-text"> Date: {{ $movie->date}}  </p>
                                <p class="card-text"> Rating: {{ $movie->vote}}  </p>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    
                </div>
            </div>
        </main>

    </body>
</html>
