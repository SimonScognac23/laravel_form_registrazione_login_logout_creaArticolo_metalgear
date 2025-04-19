<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Player;
use App\Http\Requests\PlayerRequest;


class PlayerController extends Controller
{
    public function create() {
        return view('player.create');
    }





    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Questa funzione va collegata al nostro form di inserimento dati e va precisamente nel form POST
    public function store(PlayerRequest $request) //MODIFICO IL TIPO DI CLASSE DA REQUEST A PLAYER REQUEST, LO POSSO FARE PERCHE PLAYER REQUEST ESTENDE FORM REQUEST E FORM REQUEST A SUA VOLTA ESTENDE REQUEST
    {
        // $request è l'oggetto che io definisco attraverso la classe Request
        // avrà il compito di recuperare le informazioni attraverso i nomi
        // che abbiamo dato attraverso il campo input

        // quello scritto sopra può essere scritto anche così  ---> $name = $request->input('name');
        // recuperiamo i dati del form
        $name = $request->name;     
        $surname = $request->surname;








        $img = null;   // DIAMO UN VALORE DI DEFAULT A IMG DI NULL PER GESTIRE LA SITUAZIONE SE L'UTENTE NON INSERISCE NESSUNA IMMAGINE
        // QUESTO VALORE SERVE PER NON FAR SCATTARE LA FUNZIONE STORE() SU NULL, SE PER CASO L'UTENTE NON INSERISCE L'IMMAGINE IL VALORE RESTA SOLO NULL SENZA ENTRARE NEL IF PER EVITARE LO STORE SU NULL!

        // CONTROLLO SE ESISTE UN FILE IMG, OSSIA SE L'UTENTE HA INSERITO UN IMMAGINE
        // ASSEGNA UN VALORE A $IMG SOLO SE L'UTENTE TE LO HA PASSATO
        if ($request->file('img')) {
            //   FORM   //
            $img = $request->file('img')->store('img', 'public'); 
            // METTERÒ LA REQUEST PERCHÉ È LA REQUEST CHE È STATA CATTURATA NEL FORM
            // IL METODO file() MI CATTURA IL FILE CARICATO DALLA REQUEST, OSSIA L'INPUT DI TIPO FILE
            // IL METODO store() MI SALVA I FILE NEL PERCORSO storage/app/public/img (NEL MIO CASO SPECIFICO)
        }  else {
            // Se img = NULL allora fai questo...
            $img = 'img/black.jpg';
        }
    







        //////////////////// Metodo salvare dati DB 1  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // creo un nuovo oggetto di classe Product, per salvarlo nel database
        //  $product = new Product();

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
            'surname' => $request->surname,
            'img' => $img  // LA NUOVA INFORMAZIONE IMG LA ASSOCIAMO ALLA VARIABILE $IMG, PRIMA PERO DOBBIAMO ISTRUIRE IL MODELLO AD ACCETTARE LA VARIABILE IMG E LO FACCIO DENTRO IL FILLABLE NEL MODEL
        ]);     

        return redirect()->route('player.create')->with('successMessage', 'Hai correttamente inserito il tuo giocatore');  // back significa torna indietro alla pagina in cui stavi
        // SUCCESS MESSAGE >>> CHIAVE
        // HAI CORRETTAMENTE.... >> PRODOTTO
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
