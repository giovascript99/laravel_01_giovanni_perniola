<x-layout>
    <header>
        <div class="container-fluid header">
            <div class="row h-custom justify-content-around align-items-center">
                <div class="row">
                    <h2 class="display-5 text-white text-center fw-semibold my-3">I NOSTRI CORSI FITNESS</h2>
                </div>
                @foreach ($corsi as $corso)
                <div class="col-12 col-md-4 my-5 d-flex justify-content-center">
                    <x-cardCorso
                    :$corso
                    />
                </div>
                @endforeach
            </div>
        </div>
    </header>
</x-layout>