
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-3">
  <div class="container justify-content-center">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav gap-4">
        <li class="nav-item">
          <a class="nav-link  fw-semibold" aria-current="page" href="{{ route('home.page') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold" href="{{ route('player.create') }}">Inserisci i giocatori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold" href="{{ route('player.index') }}">Vedi i giocatori</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
