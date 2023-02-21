<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Styles -->
        @vite('resources/js/app.js')
        <title>Laravel Comics</title>
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="text-danger text-center">Laravel Migration Seeder</h1>
            <div class="row mt-3 d-flex">
                @foreach ($trains as $train)
                <div class="col-3 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <span><strong>CODICE TRENO: </strong>{{ $train['codice_treno']}}</span>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><strong>Azienda: </strong>{{ $train['azienda']}}</li>
                          <li class="list-group-item"><strong>Stazione di partenza: </strong>{{ $train['stazione_partenza']}}</li>
                          <li class="list-group-item"><strong>Stazione di arrivo: </strong>{{ $train['stazione_arrivo']}}</li>
                          <li class="list-group-item"><strong>Orario di partenza: </strong>{{ $train['orario_partenza']}}</li>
                          <li class="list-group-item"><strong>Orario di arrivo: </strong>{{ $train['orario_arrivo']}}</li>
                          <li class="list-group-item"><strong>In orario: </strong>{{ changeBool($train['in_orario']) }}</li>
                          <li class="list-group-item"><strong>Cancellato: </strong>{{ changeBool($train['cancellato']) }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>