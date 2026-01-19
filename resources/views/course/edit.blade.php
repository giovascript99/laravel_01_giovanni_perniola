<x-layout>
    <div class="container-fluid header">
        <div class="row justify-content-center">
            <x-display-message />
            <x-display-errors />
            <h1 class="text-white text-center py-5">Modifica Corso</h1>
            <div class="col-12 col-md-6">
                <form class="rounded-4 bg-dark text-white p-3" action="{{ route('course.update', compact('course')) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo del corso:</label>
                        <input name="title" type="text" class="form-control" id="title"
                            value="{{ $course->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="pt" class="form-label">Personal Trainer:</label>
                        <input name="pt" type="text" class="form-control" id="pt"
                            value="{{ $course->pt }}">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="intensity" class="form-label">Intensità:</label>
                                <input type="text" name="intensity" class="form-control" id="intensity"
                                    value="{{ $course->intensity }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="time" class="form-label">Tempo:</label>
                                <input type="number" name="time" class="form-control" id="time"
                                    value="{{ $course->time }}">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica Corso</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
