<!-- CODICE PER MOSTRARE ERRORI DI VALIDAZIONE CON IMMAGINE -->
@if ($errors->any())
    <div class="alert alert-danger d-flex align-items-center">
        <!-- Aggiungi l'immagine all'inizio -->
        <img src="https://s2.qwant.com/thumbr/280x269/e/f/f2784ac677f741223ef7061995a7508063756be160bf684f155bcf50cdf547/OIP.CUgUWQMzx_dq-U_DV_6QUAAAAA.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%2Fid%2FOIP.CUgUWQMzx_dq-U_DV_6QUAAAAA%3Fpid%3DApi&q=0&b=1&p=0&a=0.jpg" alt="Errore" style="width: 30px; height: 30px; margin-right: 10px;">
        
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
