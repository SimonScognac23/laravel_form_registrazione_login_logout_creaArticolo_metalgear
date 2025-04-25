

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-3">
  <div class="container justify-content-center">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav align-items-center gap-4">

        <li class="nav-item">
          <!-- Link che porta alla homepage personalizzata (home.page) -->
          <a class="nav-link fw-semibold text-warning-emphasis" style="color: #FFD700;" aria-current="page" href="{{ route('home.page') }}">
            Home
          </a>
        </li>

        <li class="nav-item">
          <!-- Link per visualizzare la lista di tutti i giocatori -->
          <a class="nav-link fw-semibold text-warning-emphasis" style="color: #FFD700;" href="{{ route('player.index') }}">
            Vedi i giocatori
          </a>
        </li>

        <li class="nav-item">
          <!-- Link per visualizzare la lista di tutti gli articoli -->
          <a class="nav-link fw-semibold text-warning-emphasis" style="color: #FFD700;" href="{{ route('article.index') }}">
            Vedi gli articoli
          </a>
        </li>

        

        @auth
          <li class="nav-item">
            <!-- Link per accedere al form di creazione di un nuovo giocatore -->
            <a class="nav-link fw-semibold text-warning-emphasis" style="color: #FFD700;" href="{{ route('player.create') }}">
              Inserisci i giocatori
            </a>
          </li>

          <li class="nav-item">
            <!-- Link per accedere al form di creazione di un nuovo prodotto -->
            <a class="nav-link fw-semibold text-warning-emphasis" style="color: #FFD700;" href="{{ route('article.create') }}">
              Crea Articolo
            </a>
          </li>
        @endauth

        @guest
          <!-- if(!Auth::user())  pag.46 appunti LVDB Se l'utente è loggato il valore è true e tutto quello che viene dopo non viene visualizzato-->
          <li class="nav-item">
            <!-- Link alla pagina di registrazione fornita da Laravel -->
            <a class="nav-link fw-semibold text-warning-emphasis" style="color: #FFD700;" href="{{ route('register') }}">
              Registrati
            </a>
          </li>

          <li class="nav-item">
            <!-- Link alla pagina di login fornita da Laravel -->
            <a class="nav-link fw-semibold text-warning-emphasis" style="color: #FFD700;" href="{{ route('login') }}">
              Accedi
            </a>
          </li>
        @endguest

        @auth
          <li class="nav-item">
            <a class="nav-item" href="#">Benvenuto {{Auth::user()->name}}</a>
            <!-- Sostituito il tag <a> con un <form> perché i tag <a> non supportano direttamente le richieste POST.
                 Per effettuare il logout (che richiede una POST), Laravel consiglia di usare un <form>.
                 Il bottone effettua il logout dell'utente autenticato. -->
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn btn-link nav-link fw-semibold p-0 m-0 text-warning-emphasis" style="text-decoration: none; color: #FFD700;">
                Logout
              </button>
            </form>
          </li>
        @endauth

      </ul>
    </div>
  </div>
</nav>
