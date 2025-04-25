<div class="col-md-6 col-lg-4 mb-4">
  <div class="card h-100 article-card">
    <div class="card-header article-card-header">
      {{ $article->title }}
    </div>
    <div class="row g-0 h-100">
      <div class="col-12">
        <img src="{{ Storage::url($article->img) }}" class="img-fluid article-image" alt="{{ $article->title }}">
      </div>
      <div class="col-12">
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <h5 class="card-title article-subtitle">{{ $article->subtitle }}</h5>
          </div>
          <a href="{{ route('article.show', compact('article')) }}" class="btn btn-outline-success mt-3">Dettaglio articolo</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- con compact(article) anche se sembra che sto passando tutto l'articolo gli passera solo l' ID su dettaglio prodotto, grazie alla rotta parametrica -->
