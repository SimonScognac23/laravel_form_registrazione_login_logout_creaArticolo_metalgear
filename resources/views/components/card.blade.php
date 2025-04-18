



<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($player->img)}}" class="card-img-top" alt="...">
    
    <div class="card-body">
        <h5 class="card-title">{{$player->name}}</h5>
        <p class="card-text">{{$player->surname}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>


<!-- {{$player->name}} QUESTO LO POSSO FARE GRAZIE AL PASSAGGIO DI DATI CHE 
     HO FATTO NELLA INDEX, OSSIA TRAMITE QUESTO PEZZO DI CODICE >>>>> :player="$player" <<<<<<< -->

<!-- TUTTO CIÒ CHE HO PASSATO DALLA MIA INDEX SONO I VALORI DEI PRODOTTI, 
     ED È IL COMPONENTE CHE HA IL COMPITO DI ASSOCIARE LE VARIE INFORMAZIONI -->





