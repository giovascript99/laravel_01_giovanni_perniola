<x-layout>
    
    <div class="container-fluid header">
        <div class="row text-white">
            <h2>Inserisci il tuo corso preferito:</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('corsi.submit')}}" method="POST" enctype="multipart/form-data" class="text-white">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Corso:</label>
                        <input type="text" name="title" class="form-control" id="title"  value="{{old('title')}}">
                    </div>
                    <div class="mb-3">
                        <label for="pt" class="form-label">Personal Trainer:</label>
                        <input type="text" name="pt"  class="form-control" id="pt" value="{{old('pt')}}">
                    </div>
                    <div class="mb-3">
                        <label for="intensity" class="form-label">Intensità:</label>
                        <input type="text" name="intensity"  class="form-control" id="intensity" value="{{old('intensity')}}">
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Tempo:</label>
                        <input type="number" name="time"  class="form-control" id="time" value="{{old('time')}}">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Aggiungi un'immagine:</label>
                        <input type="file" name="img"  class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Crea corso</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>