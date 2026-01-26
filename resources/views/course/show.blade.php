<x-layout>
    <div class="container-fluid header">
        <div class="row justify-content-center">
            <h1 class="text-center text-white py-5">{{ $course->title }}</h1>
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{ Storage::url($course->img) }}" class="card-img-top" alt="{{ $course->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->title }}</h5>
                        <p class="card-text">pt: {{ $course->pt }}</p>
                        <p class="card-text">intensity: {{ $course->intensity }}</p>
                        <p class="card-text">time: {{ $course->time }}</p>
                        <ul>
                            @forelse ($course->categories as $category)
                                <li>{{ $category->name }}</li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
            @auth
                @if ($course->user_id == Auth::id())
                    <div class="row">
                        <form action="{{ route('course.delete', compact('course')) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Elimina</button>
                        </form>
                    </div>
                @endif
            @endauth
        </div>
    </div>
</x-layout>
