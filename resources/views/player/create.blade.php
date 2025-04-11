<x-layout>

    <header class="header2">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <h1 class="text-center">Inserisci i giocatori</h1>
                </div>
            </div>
        </div>
    </header>



    <div class="row">
    <div class="col-12 col-md-6 mx-auto">
      <form  method="post" action="{{ route('player.submit') }}">
        @csrf

        <!-- Colonna name-->
        <div class="mb-3">
          <label for="name" class="form-label">Nome del giocatore</label>
          <input 
            name="name" 
            type="text" 
            class="form-control" 
            id="name"
          >            
        </div>


        <!-- name deve corrispondere a quello che è scritto nel modello cosi da poter salvare il dato -->
        <!-- Colonna surname-->
        <div class="mb-3">
          <label for="surname" class="form-label">Cognome del giocatore</label>
          <input 
            name="surname" 
            type="text" 
            class="form-control" 
            id="surname"
          >            
        </div>

        <button type="submit" class="btn btn-primary">Invia dati</button>
      </form>
    </div>
  </div>
</div>




</x-layout>
