<x-layout>
    <header>
        <div class="container-fluid header d-flex">

            @if (session()->has('emailSent'))
                <div class="alert alert-success">
                    {{ session('emailSent') }}
                </div>
            
            @endif

            @if (session()->has('emailError'))
                <div class="alert alert-danger">
                    {{ session('emailError') }}
                </div>
            @endif

            @if (session()->has('successMessage'))
                <div class="alert alert-success">
                    {{ session('successMessage') }}
                </div>             
            @endif

            @if (session()->has('articleMessage'))
                <div class="alert alert-success">
                    {{ session('articleMessage') }}
                </div>             
            @endif

            <div class="row flex-fill align-items-center">
                <div class="col-12 d-flex justify-content-center">
                    <h1 class="homepage-title">Fitness World</h1>
                </div>
            </div>
        </div>
    </header>
</x-layout>