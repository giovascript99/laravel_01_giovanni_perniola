<x-layout>
    <div class="container-fluid header">
        <div class="row justify-content-center pt-5">
            <h2 class="text-white display-4 text-center py-5">Esplora per categoria</h2>
            @foreach ($categories as $category)
                <div class="col-12 col-md-3 d-flex justify-content-center">
                    <a href="{{route('category.show', compact('category'))}}" class="h-100 w-100">
                        <div class="box mx-auto d-flex justify-content-center align-items-center">
                            <h3 class="text-white text-capitalize">{{$category->name}}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>