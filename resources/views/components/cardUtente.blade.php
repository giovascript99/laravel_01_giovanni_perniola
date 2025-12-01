<div class="card text-center" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$name}} {{$surname}}</h5>
        <h6 class="card-subtitle mb-2">{{$role}}</h6>
        <a href="{{route('dettaglio-utente', ['name'=>$name])}}" class="btn btn-primary">Leggi di più</a>
    </div>
</div>