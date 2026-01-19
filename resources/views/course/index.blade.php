<x-layout>
    <div class="container-fluid header">
        <div class="row justify-content-center">
            @if (session()->has('successMessage'))
                <div class="alert alert-success">
                    {{ session('successMessage') }}
                </div>
            @endif
            <h2 class="display-5 text-white text-center fw-semibold py-3">I nostri corsi fitness</h2>
            @foreach ($courses as $course)
                <div class="col-12 col-md-3 py-5 d-flex justify-content-center">
                    <x-cardCorso :$course />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
