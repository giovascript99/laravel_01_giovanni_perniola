<div class="card mb-3" style="width: 18rem;">
    <img src="{{$img}}" class="card-img-top" alt="{{$corso}}">
    <div class="card-body text-center">
        <h5 class="card-title">{{$corso}}</h5>
        <a href="{{route('dettaglio-corso', ['id'=>$id])}}" class="btn btn-primary">Go somewhere</a>
    </div>
</div>