<x-layout>
    <div class="container-fluid header">
        <div class="row justify-content-center">
            <h1 class="text-white text-center py-5">Inserisci un nuovo articolo</h1>
            <x-display-message />
            <x-display-errors />
            <div class="col-12 col-md-6">
                <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data"
                    class="text-white bg-dark rounded-4 p-3 mb-5">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo dell'articolo:</label>
                        <input name="title" type="text" class="form-control" id="title"
                            value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo dell'articolo:</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle"
                            value="{{ old('subtitle') }}">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo:</label>
                        <textarea name="body" class="form-control" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Crea Articolo</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
