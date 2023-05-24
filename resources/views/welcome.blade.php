<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        <h1 class="text-center">Treni</h1>
        <div class="container">
            <div class="row">
                @foreach ($data as $train)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3 mb-4 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h2>Azienda: {{ $train['azienda'] }} </h2>
                                <p>Stazione di partenza:{{ $train['stazione_di_partenza'] }}</p>
                                <p>Orario di partenza:{{ $train['orario_di_partenza'] }}</p>
                                <p>Stazione di arrivo:{{ $train['stazione_di_arrivo'] }}</p>
                                <p>orario di arrivo:{{ $train['orario_di_arrivo'] }}</p>
                                <p>Codice Treno: {{ $train['codice_treno'] }}</p>
                                <p>Treno in orario:{{ $train['in_orario'] }}</p>
                                <p>Treno cancellato:{{ $train['cancellato'] }}</p>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
