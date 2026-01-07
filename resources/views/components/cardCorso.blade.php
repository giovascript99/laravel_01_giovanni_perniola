<div class="card mb-3" style="width: 18rem;">
    @if (!$corso->img)
    <img src="https://picsum.photos/200/300" class="card-img-top img-fluid" alt="{{ $corso->title }}">

    @else
    <img src="{{Storage::url($corso->img)}}" class="card-img-top img-fluid" alt="{{ $corso->title }}">
        
    @endif
    <div class="card-body text-center">
        <h5 class="card-title">{{ $corso->title }}</h5>
        <p class="card-text">pt: {{$corso->pt}}</p>
        <p class="card-text">intensity: {{$corso->intensity}}</p>
        <p class="card-text">Time: {{$corso->time}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>