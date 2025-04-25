

<x-layout>



  <header class="header py-5 bg-light">
    <div class="container">
      <div class="row justify-content-center align-items-center text-center">
        <div class="col-12 col-md-6 p-4 border rounded shadow" style="background-color: #f5f5dc;">
          <img
            src="https://s2.qwant.com/thumbr/474x474/f/d/e02471d230b4ae59f5b3e030dfe62c6f9c77a2221e0bfcdd7fcb8c116655ff/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.rEzGF7lm6B552Z-9o76G0AHaHa%26pid%3DApi&q=0&b=1&p=0&a=0.jpg"
            alt="Foto HomePage"
            class="img-fluid mx-auto d-block mb-4 border border-dark rounded"
            style="max-width: 300px;"
          />

          <h1 class="text-black fw-bold">Area login</h1>
        </div>
      </div>
    </div>
  </header>

  <x-display-errors/>


   <!-- CONTAINER PRINCIPALE -->
<div class="container">
  <div class="row mt-5 justify-content-center text-center">
    <div class="col-12 col-md-8">
      <!-- Titolo della pagina -->
      <h1 class="mb-4 text-uppercase fw-bold text-dark">Inserisci il tuo nome e cognome per giocare a Metal Gear Solid 2</h1>
    </div>

    <!-- FORM DI REGISTRAZIONE -->
    <!-- Il form invia i dati alla route 'register', fornita automaticamente da Laravel Fortify -->
    <!-- Vedi documentazione Laravel: https://laravel.com/docs/fortify#registration -->

    <!-- LINK ALLA ROTTA LARAVEL register -->
    <form
      action="{{ route('login') }}" 
      method="POST"
      class="p-4 border rounded bg-light shadow"
     
    >
      @csrf <!-- Protezione contro attacchi CSRF -->

      <!-- Campo email dell'utente -->
      <div class="mb-3 text-start">
        <label for="email" class="form-label fw-semibold">Email</label>
        <input type="email" name="email" class="form-control border-dark shadow-sm" id="email" placeholder="Inserisci la tua email">
      </div>


      <!-- Campo password -->
      <div class="mb-3 text-start">
        <label for="password" class="form-label fw-semibold">Password</label>
        <input type="password" name="password" class="form-control border-dark shadow-sm" id="password" placeholder="Crea una password">
      </div>
    

      <!-- Bottone di invio -->
      <div class="d-grid">
        <!-- Il submit invia tutto alla rotta 'register' (Laravel Fortify), che gestisce la logica di registrazione -->
        <button type="submit" class="btn btn-dark btn-lg">Login</button>
      </div>
    </form>
  </div>
</div>




</x-layout>
