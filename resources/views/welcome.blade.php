
<x-layout>




<header class="header py-4">
  <div class="container">
    <div class="row justify-content-center align-items-center text-center">
      <div class="col-12 col-md-6">

     
        <img src="https://s2.qwant.com/thumbr/474x474/f/d/e02471d230b4ae59f5b3e030dfe62c6f9c77a2221e0bfcdd7fcb8c116655ff/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.rEzGF7lm6B552Z-9o76G0AHaHa%26pid%3DApi&q=0&b=1&p=0&a=0.jpg" alt="Foto HomePage" class="img-fluid mx-auto d-block mb-3" style="max-width: 300px;">

    
        <h1 class="text-center text-dark">Benvenuto nella Home</h1>


      </div>
    </div>
  </div>
</header>





<div class="container">
  <div class="row mt-5 justify-content-center text-center">
    <div class="col-12 col-md-8">
      <h1 class="mb-4">Inserisci il tuo nome e cognome per giocare a Metal Gear Solid 2</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-md-6 mx-auto">
      <form action="{{ route('player.collection') }}" method="POST">
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