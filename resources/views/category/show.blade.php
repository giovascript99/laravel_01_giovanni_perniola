<x-layout>
    <div class="container-fluid header">
        <div class="row">
            <h2 class="text-center text-white display-4 py-5">Corsi della categoria <span>{{ $category->name }}</span></h2>
        </div>
        <div class="row justify-content-center">
            @forelse ($category->courses as $course)
                <div class="col-12 col-md-3 d-flex justify-content-center">
                    <x-cardCorso :course="$course" />
                </div>
            @empty
            <div class="col-12 col-md-8 text-center">
                <h4 class="text-white pb-3">
                    Nessun corso collegato a questa categoria
                </h4>
                <a href="{{route('course.create')}}" class="btn btn-warning">Crealo tu!</a>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>
