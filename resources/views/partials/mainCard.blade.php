<div class="container">
    <div class="row">
        
            @foreach ($trains as $train)
            <div class="col card-train">
                <p>Azienda: {{$train->azienda}}</p>
                <p>Partenza: {{$train->stazione_di_partenza}}</p>
                <p>Arrivo: {{$train->stazione_di_arrivo}}</p>
                <p>Orario di partenza: {{$train->orario_di_partenza}}</p>
                <p>Orario di arrivo: {{$train->orario_di_arrivo}}</p>
                <p>Codice treno: {{$train->codice_treno}}</p>
            </div>
            @endforeach
        </div>
</div>