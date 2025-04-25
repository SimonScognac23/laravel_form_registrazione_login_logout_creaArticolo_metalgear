<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;   // MODIFICO QUESTO BOOLEANO PER USARE LA REQUEST CUSTOM
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // ARRAY CHIAVE-VALORE, LA CHIAVE SARÀ IL CAMPO INPUT DA VALIDARE,
            // MENTRE IL VALORE È LA "REGOLA", OSSIA COSA VUOI CONTROLLARE DI QUEL CAMPO
            // STO CHIEDENDO DI CONTROLLARE IL CAMPO title CHE SIA PASSATO IN MANIERA OBBLIGATORIA
            // PIPE LINE | → QUELLO CHE È A SINISTRA È UNA REGOLA, QUELLO CHE È A DESTRA È UN'ALTRA REGOLA
            'title' => 'required|min:3',  // REQUIRED COME REGOLA, OSSIA TITOLO OBBLIGATORIO, MIN >>> MINIMO 3 CARATTERI
            'subtitle' => 'required',     // SOTTOTITOLO OBBLIGATORIO
            'body' => 'required',         // CORPO ARTICOLO OBBLIGATORIO
        ];
    }

    // OVERRIDE DEL METODO MESSAGES PER MODIFICARE I MESSAGGI DI ERRORE
    public function messages()
    {
        // ARRAY CHIAVE VALORE
        // LA CHIAVE È LA REGOLA DA VALIDARE
        // IL VALORE È IL MESSAGGIO CHE APPARE SE QUELLA REGOLA NON È STATA RISPETTATA
        // PER FAR SCATTARE IL VALORE SUL REQUIRED DEL title DEVI CONCATENARE title.required

        return [
            'title.required' => 'Non hai inserito il titolo',
            'title.min' => 'Il titolo deve avere almeno 3 caratteri',
            'subtitle.required' => 'Non hai inserito il sottotitolo, e dai impegnati!!!',
            'body.required' => 'Non hai scritto il contenuto dell\'articolo', // opzionale, se vuoi personalizzare anche questo
        ];
    }
}
