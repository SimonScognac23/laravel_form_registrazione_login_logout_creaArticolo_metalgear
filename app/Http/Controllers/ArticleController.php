<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all(); // Mi recupera dal DB tutti gli articoli e li salva in una collezione
        return view('article.index', compact('articles'));// Nella compact passare come argomento la stringa del nome della variabile
        // Logica per mostrare una lista di articoli 
    }

    // se abbiamo una o più variabili che vogliamo passare e il nome che noi scegliamo come chiave è uguale al nome della variabile
    // per fare quello che ho scritto sopra si utilizza il metodo compact(), e compact accetta una variabile o più variabili
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  
    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        // Verifica se il file è presente
        if ($request->hasFile('img')) {
            // Se il file è presente e valido, lo salviamo
            $imgPath = $request->file('img')->store('img', 'public');
        } else {
            // Se il file non è presente, usiamo il valore predefinito
            $imgPath = 'imgArticles/default/default.jpg';  // Percorso relativo dell'immagine predefinita
        }
    
        // Mass Assignment: creiamo un nuovo articolo con i dati della request
        Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'img' =>  $imgPath,  // Salviamo il percorso dell'immagine
        ]);
    
        // Ritorna al form con un messaggio di successo
        return redirect()->back()->with('successMessage', 'Articolo inserito con successo');
    }
    




    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * Display the specified resource.  ROTTA PARAMETRICA
     */
    public function show(Article $article)  // il article sarà semplicemente l'id che lv attraverso un operazione logica recupera l'id e recupera tutto l'articolo, in realta scrivere o no $id non è necessario 
    {
      
        // Logica per mostrare un articolo specifico (non implementata ancora)
        return view('article.show', compact('article')); 
        // Utilizziamo compact per passare la variabile article alla vista 'article.show',
// in modo che la vista possa accedere ai dati dell'articolo, incluso l'ID, e mostrarne i dettagli.

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        // Logica per mostrare il form di modifica di un articolo (non implementata ancora)
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        // Logica per aggiornare l'articolo (non implementata ancora)
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        // Logica per rimuovere un articolo (non implementata ancora)
    }
}
