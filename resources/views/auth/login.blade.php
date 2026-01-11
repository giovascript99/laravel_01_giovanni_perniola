<x-layout>
    <div class="container-fluid header">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 text-white pt-5">
                <h1 class="text-center">Accedi</h1>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo email:</label>
                        <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name='password' class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>