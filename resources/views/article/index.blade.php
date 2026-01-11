<x-layout>
    
    <div class="container-fluid header">
        <div class="row justify-content-center">
            <h2 class="display-5 text-white text-center fw-semibold py-5">I nostri articoli</h2>
            @foreach($articles as $article)
            <div class="col-12 col-md-3 py-5 d-flex justify-content-center">
                <x-cardArticle
                :$article
                />
            </div>
            @endforeach
        </div>
    </div>
    
</x-layout>