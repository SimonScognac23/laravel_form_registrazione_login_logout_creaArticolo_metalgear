
<x-layout>

    <!-- HEADER -->
    <header class="header2">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <h1 class="text-center">Inserisci i giocatori</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- MESSAGGIO DI SUCCESSO SE PRESENTE -->
    @if (session()->has('successMessage'))  <!-- if per il controllo se c'è una sessione di nome successMessage allora creami un div -->
        <div class="alert alert-success">
            {{ session('successMessage') }} <!-- richiamiamo all'interno il nome della sessione -->
        </div>
    @endif

    <!-- CODICE PER MOSTRARE ERRORI DI VALIDAZIONE -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- FORM DI INSERIMENTO -->
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <form method="POST" action="{{ route('player.submit') }}" enctype="multipart/form-data">
                @csrf

                <!-- INSERIRE ENCTYPE QUANDO VOGLIAMO PASSARE DATI PIÙ COMPLESSI DI SEMPLICI STRINGHE O NUMERI -->

                <!-- CAMPO NAME -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nome del giocatore</label>
                    <input 
                        name="name" 
                        value="{{ old('name') }}"
                        type="text" 
                        class="form-control" 
                        id="name"
                    >            
                </div>
                <!-- NAME DEVE CORRISPONDERE A QUELLO CHE È SCRITTO NEL MODELLO COSÌ DA POTER SALVARE IL DATO -->

                <!-- CAMPO SURNAME -->
                <div class="mb-3">
                    <label for="surname" class="form-label">Cognome del giocatore</label>
                    <input 
                        name="surname" 
                        value="{{ old('surname') }}"
                        type="text" 
                        class="form-control" 
                        id="surname"
                    >            
                </div>

                <!-- CAMPO IMMAGINE (DA CAMBIARE TIPO DA TEXT A FILE) -->
                <div class="mb-3">
                    <label for="img" class="form-label">Inserisci Immagine</label>
                    <input 
                        name="img" 
                        type="file" 
                        class="form-control" 
                        id="img"
                    >            
                </div>

                <!-- BOTTONE DI INVIO -->
                <button type="submit" class="btn btn-primary">Invia dati</button>
            </form>
        </div>
    </div>

</x-layout>
