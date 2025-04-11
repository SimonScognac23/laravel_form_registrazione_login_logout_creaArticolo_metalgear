<x-layout>


 <!-- container per ciclare tutti i prodotti e inserirli dentro la card di bootstrap-->
 <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">

                @foreach($players as $player)  
                <!-- quello che mi ritorna è un dato di tipo collection, che è come un array e ha delle propretà in più -->
                
                <!--Card di bootstrap-->
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

                @endforeach

                <!-- players è un oggetto e quindi per accedere alle proprietà dell'oggetto all'interno dell'oggetto uso la freccetina -->

            </div>
        </div>
    </div>





</x-layout>