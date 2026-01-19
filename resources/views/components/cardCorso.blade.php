<div class="card mb-3" style="width: 18rem;">
    @if (!$course->img)
        <img src="https://picsum.photos/200/300" class="card-img-top img-fluid" alt="{{ $course->title }}">
    @else
        <img src="{{ Storage::url($course->img) }}" class="card-img-top img-fluid" alt="{{ $course->title }}">
    @endif
    <div class="card-body text-center">
        <h5 class="card-title">{{ $course->title }}</h5>
        <p class="card-text">pt: {{ $course->pt }}</p>
        <p class="card-text">intensity: {{ $course->intensity }}</p>
        <p class="card-text">Time: {{ $course->time }}</p>
        <p>Creato da: {{ $course->user->name }}</p>
        <a href="{{ route('course.show', compact('course')) }}" class="btn btn-primary me-2">Vai al corso</a>
        @auth
            @if ($course->user_id == Auth::id())
                <a href="{{ route('course.edit', compact('course')) }}" class="btn btn-primary">Modifica</a>
            @endif
        @endauth
    </div>
</div>
