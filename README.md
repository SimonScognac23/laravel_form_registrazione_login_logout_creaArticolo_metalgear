Italiano:
Nel controller ArticleController, ho implementato diverse azioni che gestiscono le operazioni CRUD (Create, Read, Update, Delete) per gli articoli. Ecco un riepilogo di quello che ho fatto:

Index: Ho creato il metodo index() che recupera tutti gli articoli dal database tramite il modello Article e li passa alla vista article.index utilizzando il metodo compact(). In questo modo posso visualizzare la lista degli articoli nella pagina corrispondente.

Create: Il metodo create() restituisce la vista per la creazione di un nuovo articolo, dove l'utente può inserire i dati dell'articolo.

Store: Nel metodo store(), ho gestito il salvataggio di un nuovo articolo. Ho incluso una logica per gestire il caricamento di un'immagine: se l'utente carica un file immagine, questo viene salvato nella cartella img sotto la directory public; se non viene caricato alcun file, viene utilizzata un'immagine predefinita. Successivamente, l'articolo viene salvato nel database e l'utente viene reindirizzato alla pagina precedente con un messaggio di successo.

Show: Il metodo show() recupera un singolo articolo tramite la sua ID (passata come parametro tramite route) e lo passa alla vista article.show per visualizzare i dettagli dell'articolo.

Gli altri metodi (edit, update, destroy) sono stati preparati, ma non sono ancora implementati.

English:
In the ArticleController, I implemented several actions that handle CRUD (Create, Read, Update, Delete) operations for articles. Here's a summary of what I've done:

Index: I created the index() method which retrieves all articles from the database using the Article model and passes them to the article.index view using the compact() method. This allows me to display the list of articles on the corresponding page.

Create: The create() method returns the view for creating a new article, where the user can input the article's data.

Store: In the store() method, I handled the saving of a new article. I included logic to handle image uploads: if the user uploads an image file, it is saved in the img folder under the public directory; if no file is uploaded, a default image is used. Afterward, the article is saved in the database, and the user is redirected to the previous page with a success message.

Show: The show() method retrieves a single article by its ID (passed as a parameter via route) and passes it to the article.show view to display the article's details.

The other methods (edit, update, destroy) have been set up but are not yet implemented.








------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

























SITO PER INVIO DATI AL DATABASE CON IMMAGINI


Nel controller PlayerController ho gestito le funzionalità principali relative all'inserimento e alla visualizzazione dei giocatori.

Metodo create()
Con questo metodo restituisco semplicemente la vista con il form per inserire i dati di un nuovo giocatore.

Metodo store()
Questo metodo è collegato al form in POST. Ho utilizzato una classe personalizzata chiamata PlayerRequest, che estende FormRequest, per validare i dati inseriti dall’utente.
Recupero i valori name e surname dal form.

Gestisco anche il caricamento dell’immagine:

Se l’utente carica un file, lo salvo nel percorso storage/app/public/img utilizzando il metodo store().

Se non viene caricata alcuna immagine, assegno un'immagine di default chiamata black.jpg già presente nella cartella img.

Successivamente, utilizzo il metodo create() di Eloquent per salvare i dati nel database tramite Mass Assignment, poiché ho già impostato i campi fillable nel mio modello Player.

Alla fine, reindirizzo l’utente al form con un messaggio di successo utilizzando with().

Metodo index()
Con questo metodo recupero tutti i giocatori presenti nel database usando Player::all() e li passo alla vista player.index per mostrarli.



-------------------------------------------------------------------------------------------


In the PlayerController, I handled the main features related to adding and displaying players.

create() Method
With this method, I simply return the view that contains the form to insert a new player.

store() Method
This method is linked to the form’s POST action. I used a custom class called PlayerRequest, which extends FormRequest, to validate the input data.
I retrieve the name and surname values from the form.

I also handle image upload:

If the user uploads a file, I save it in the storage/app/public/img directory using the store() method.

If no image is uploaded, I assign a default image called black.jpg which is already present in the img folder.

Then, I use Eloquent’s create() method to save the data to the database using Mass Assignment, since I have already defined the fillable fields in my Player model.

Finally, I redirect the user back to the form with a success message using with().

index() Method
With this method, I retrieve all the players stored in the database using Player::all() and pass them to the player.index view for display.

