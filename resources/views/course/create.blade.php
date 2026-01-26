<x-layout>
    <div class="container-fluid header">
        <div class="row justify-content-center">
            <h1 class="text-white text-center py-5">Inserisci il tuo corso preferito</h1>
            <x-display-message />
            <x-display-errors />
            <div class="col-12 col-md-6">
                <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data"
                    class="text-white bg-dark rounded-4 p-3">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo del corso:</label>
                        <input type="text" name="title" class="form-control" id="title"
                            value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="pt" class="form-label">Personal Trainer:</label>
                        <input type="text" name="pt" class="form-control" id="pt"
                            value="{{ old('pt') }}">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="intensity" class="form-label">Intensità:</label>
                                <input type="text" name="intensity" class="form-control" id="intensity"
                                    value="{{ old('intensity') }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="time" class="form-label">Tempo:</label>
                                <input type="number" name="time" class="form-control" id="time"
                                    value="{{ old('time') }}">
                            </div>
                        </div>
                    </div>
                    <div class="mb-4s">
                        @foreach ($categories as $category)
                        <span class="pe-2">
                            <input type="checkbox" id="{{ 'categoryCheck' . $category->id }}" name="categories[]"
                                value="{{ $category->id }}">
                            <label for="{{ 'categoryCheck' . $category->id }}">{{ $category->name }}</label>
                        </span>
                        @endforeach
                        <p class="pt-1">Non vedi la categoria corretta? <a href="{{ route('category.create') }}"
                                class="fst-italic small text-white">Inseriscila tu</a></p>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine:</label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Crea corso</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
