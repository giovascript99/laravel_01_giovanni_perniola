<x-layout>
    
    <div class="container-fluid">
        <div class="row">
            <h2>Inserisci il tuo corso preferito:</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('corsi.submit')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Corso:</label>
                        <input type="text" name="corso" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="pt" class="form-label">Personal Trainer:</label>
                        <input type="text" name="pt"  class="form-control" id="pt">
                    </div>
                    <div class="mb-3">
                        <label for="intensity" class="form-label">Intensità:</label>
                        <input type="text" name="intensita"  class="form-control" id="intensity">
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Durata:</label>
                        <input type="text" name="durata"  class="form-control" id="time">
                    </div>
                    <button type="submit" class="btn btn-primary">Crea corso</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>