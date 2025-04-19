
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

