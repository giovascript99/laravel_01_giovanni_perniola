<x-layout>
    
    <div class="container-fluid header">
        <div class="row justify-content-center">
            <h1 class="text-center text-white py-5">{{$article->title}}</h1>
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-subtitle">{{$article->subtitle}}</p>
                        <p class="card-text">{{$article->body}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <form action="{{route('article.delete', compact('article'))}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Elimina</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>