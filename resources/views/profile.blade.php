<x-layout>
    <div class="container-fluid header">
        <div class="row justify-content-center">
            <h2 class="text-white text-center my-4">Profilo di {{ Auth::user()->name }}</h2>
            @forelse (Auth::user()->courses as $course)
                <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
                    <x-cardCorso :course="$course" />
                </div>
            @empty
            <div class="col-12 text-center">
                <h3 class="text-white text-center">Non hai ancora pubblicato nessun film</h3>
                <a href="{{ route('course.create') }}" class="btn btn-outline-warning">Pubblica il tuo primo film</a>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>
