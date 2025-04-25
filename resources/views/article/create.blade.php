<x-layout>

    <!-- HEADER -->
    <header class="header2">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <h1 class="text-center">Inserisci un nuovo articolo</h1>
                </div>
            </div>
        </div>
    </header>

    <x-display-message />
    <x-display-errors />

    <!-- FORM DI INSERIMENTO -->
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- INSERIRE ENCTYPE QUANDO VOGLIAMO PASSARE DATI PIÙ COMPLESSI DI SEMPLICI STRINGHE O NUMERI -->

                <!-- CAMPO TITOLO -->
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo articolo</label>
                    <input 
                        name="title" 
                        value="{{ old('title') }}"
                        type="text" 
                        class="form-control" 
                        id="title"
                    >            
                </div>
                <!-- NAME DEVE CORRISPONDERE A QUELLO CHE È SCRITTO NEL MODELLO COSÌ DA POTER SALVARE IL DATO -->

                <!-- CAMPO SOTTOTITOLO -->
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Sottotitolo dell'articolo</label>
                    <input 
                        name="subtitle" 
                        value="{{ old('subtitle') }}"
                        type="text" 
                        class="form-control" 
                        id="subtitle"
                    >            
                </div>

                <!-- CORPO DELL'ARTICOLO -->
                <div class="mb-3">
                    <label for="body" class="form-control">Corpo dell'articolo</label>
                    <textarea 
                        name="body" 
                        class="form-control" 
                        id="body"
                        rows="10"
                    >{{ old('body') }}</textarea>
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
