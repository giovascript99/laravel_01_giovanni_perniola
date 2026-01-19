<x-layout>
    <div class="container-fluid header">
        <div class="row justify-content-center">
            <x-display-message />
            <x-display-errors />
            <h1 class="text-white text-center py-5">Modifica articolo</h1>
            <div class="col-12 col-md-6">
                <form class="rounded-4 bg-dark text-white p-3" action="{{ route('article.update', compact('article')) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo dell'articolo:</label>
                        <input name="title" type="text" class="form-control" id="title"
                            value="{{ $article->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo dell'articolo:</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle"
                            value="{{ $article->subtitle }}">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo:</label>
                        <textarea name="body" class="form-control" id="body" cols="30" rows="10">{{ $article->body }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica Articolo</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
