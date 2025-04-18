<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;   //MODIFICO QUESTO BOOLEANO PER USARE LA REQUEST CUSTOM
    }






    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //  ARRAY CHIAVE-VALORE, LA CHAVE SARà IL CAMPO INPUT DA VALIDARE, MENTRE IL VALORE è LA "REGOLA" OSSIA COSA VUOI CONTROLLARE DI QUEL CAMPO
            // STO CHIEDENDO DI CONTROLLARE IL CAMPO NAME CHE SIA PASSATO IN MANIERA OBBLIGATORIA
            //PIPI LINE QUELLO CHE è A SX è UNA REGOLA QUELLO CHE è A DX è UN ALTRA REGOLA
            'name' => 'required | min:3',  // REQUIRED COME REGOLA, OSSIA NOME OBBLGATORIO, MIN >>> MINIMO 3 CARATTERI
            'surname' => 'required',
            
        ];


    }




    //OVERRIDE DEL METODO MESSAGES PER MODIFICARE I MESSAGGI DI ERRORE
    
    public function messages()
    {
        // ARRAY CHIAVE VALORE
        // LA CHIAVE è LA REGOLA DA VALIDARE
        // IL VALORE IL MESSAGGIO CHE APPARE SE QUELLA REGOLA NON è STATA RISPETTATA
        // PER FAR SCATTARE IL VALORE SUL REQUIRED DEL NAME DEVO CONCATENARE IL NAME.REQUIRED

        return[

            'name.required' => 'Non hai inserito il nome del giocatore'



        ];
    }
}
