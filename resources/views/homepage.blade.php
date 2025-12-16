<x-layout>
    <header>
        <div class="container-fluid header">
            @if (session()->has('emailSent'))
                <div class="alert alert-success text-center">
                    {{ session('emailSent') }}
                </div>
            @endif
            @if (session()->has('emailError'))
                <div class="alert alert-danger text-center">
                    {{ session('emailError') }}
                </div>
            @endif
            <div class="row h-custom">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <h1 class="display-1 fw-bold text-white">FITNESS WORLD</h1>
                </div>
            </div>
        </div>
    </header>
</x-layout>