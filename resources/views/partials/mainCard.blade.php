<div>
    @foreach ($trains as $train)
        <p>{{$train->azienda}}</p>
        <p>{{$train->stazione_di_partenza}}</p>
        <p>{{$train->stazione_di_arrivo}}</p>
        <p>{{$train->orario_di_partenza}}</p>
        <p>{{$train->codice_treno}}</p>
    @endforeach
</div>