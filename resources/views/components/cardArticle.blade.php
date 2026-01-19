<div class="card mb-3" style="width: 18rem;">
    @if (!$article->img)
        <img src="https://picsum.photos/200/300" class="card-img-top img-fluid" alt="{{ $article->title }}">
    @else
        <img src="{{ Storage::url($article->img) }}" class="card-img-top img-fluid" alt="{{ $article->title }}">
    @endif
    <div class="card-body text-center" style="width: 18rem;">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-subtitle">{{ $article->subtitle }}</p>
        <p class="card-text">{{ $article->body }}</p>
        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary me-2">Vai all'articolo</a>
        <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-primary">Modifica</a>
    </div>
</div>
