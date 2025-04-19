

<div class="col-md-6 col-lg-4 mb-4">
  <div class="card h-100">
    <div class="row g-0 h-100">
      <div class="col-4">
        <img src="{{ Storage::url($player->img) }}" class="img-fluid rounded-start h-100 object-fit-cover" alt="{{ $player->name }}">
      </div>
      <div class="col-8">
        <div class="card-body d-flex flex-column justify-content-center">
          <h5 class="card-title">{{ $player->name }}</h5>
          <p class="card-text">{{ $player->surname }}</p>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- {{$player->name}} QUESTO LO POSSO FARE GRAZIE AL PASSAGGIO DI DATI CHE 
     HO FATTO NELLA INDEX, OSSIA TRAMITE QUESTO PEZZO DI CODICE >>>>> :player="$player" <<<<<<< -->

<!-- TUTTO CIÒ CHE HO PASSATO DALLA MIA INDEX SONO I VALORI DEI PRODOTTI, 
     ED È IL COMPONENTE CHE HA IL COMPITO DI ASSOCIARE LE VARIE INFORMAZIONI -->





