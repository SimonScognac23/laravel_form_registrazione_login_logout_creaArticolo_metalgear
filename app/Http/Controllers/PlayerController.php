<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Player;

class PlayerController extends Controller
{
    public function create() {
        return view('player.create');
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Questa funzione va collegata al nostro form di inserimento dati e va precsamente nel form POST
    public function store(Request $request)
    {
        // $request è l'oggetto che io definisco attraverso la classe Request
        // avrà il compito di recuperare le informazioni attraverso i nomi
        // che abbiamo dato attraverso il campo input

        // quello scritto sopra può essere scritto anche così  ---> $name = $request->input('name');
        // recuperiamo i dati del form
        // $name = $request->name;     
        // $surname = $request->surname;

        //////////////////// Metodo salvare dati DB 1  ////////////////////////////////////////////////////////////////////////////////

        // creo un nuovo oggetto di classe Product, per salvarlo nel database
        // $product = new Product();

        // ora devo valorizzare i campi dell'oggetto $product
        // $product->name = $request->name; 
        // $product->surname = $request->surname;
       
        // dd($product);
        // $product->save();   // sto salvando il mio prodotto nel mio dd

        //////////////////////////////// Metodo salvare dati DB 2/////////////////////////////////////////////////////////////////////////////////////

        // questo metodo si chiama Mass Assignment. Quello che abbiamo fatto sopra nel metodo 1
        // può essere fatto con un'unica richiesta

        // recupero le capacità di salvataggio del mio modello 
        // questo metodo accetta al suo interno un array chiave-valore, che vuole come chiave il nome del campo che corrispondono a loro volta al nome della fillable scritta come modello
        // e come valore il valore da attribuire al campo

        Player::create([
            'name' => $request->name,
            'surname' => $request->surname
        ]);     

        return redirect()->route('home.page')->with('successMessage', 'Hai correttamente inserito il tuo giocatore');  // back significa torna indietro alla pagina in cui stavi
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Funzione per visualizzare la lista dei giocatori
    public function index()
    {
        // all'interno del modello posso richiamare diverse operazioni che mi permettono di recuperare le varie informazioni,
        // ovvero i vari Record in questo caso
        $players = Player::all();    
        // recupero TUTTI i prodotti all'interno del mio database,
        // richiamo la mia classe GameDeveloper che è la classe che si mette in comunicazione tra Laravel e il database
        // e le dico di prendere tutti i dati

        return view('player.index', ['players' => $players]);  
        // sarebbe il ritorno della vista del file index dentro la CARTELLA product
        // devo ora interrogare il db per recuperare le mie informazioni
    }
}
