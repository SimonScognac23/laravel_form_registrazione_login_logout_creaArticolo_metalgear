<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model  // estendono la classe genitore Model
{
    use HasFactory;

    // qu dobbiamo settare quali dati verranno salvati nel database




    // Laravel usa un tipo di proprietà detto fillable
    // il fillable va definito protected 

    // Questa proprietà definisce i campi del mio modello, di base è un array e dentro andremo a inserire i nomi dei campi
    protected $fillable = [  
        'name',
        'surname',
        'img'  //ISTRUISCO IL FILLABLE A PRENDERE ANCHE L'INFORMAZIONE IMG
      
        
    ];



}