<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
     * Run the migrations.
     */
    public function up(): void


    {
        Schema::create('user', function (Blueprint $table) {  //sta creando una tabella attraverso la funzione create,    Schema è invece una classe di laravel
            // la tabella verra chiamata 'player' e quello che andro ad inserire dentro la tabella lo defnisco tramite una callback
            // $table è un oggetto  che ha le informazioni dello schema e tramite l $table mi richiamo i vari metodi


            $table->id(); // con il metodo id sto definendo una colonna che contiene numeri interi autoincrementali senza segno

            $table->string('name')->unique(); // con il metodo string() sto definendo una colonna contenente un dato di tipo string con un massimo di 255 caratteri
            // con name definisco il nome della colonna

       

            $table->timestamp('email_verified_at')->nullable();// timestamp crea due colonne che 
            // identificano la data di creazione e la data di aggiornamento della riga
            // il metodo nullable() permette alla colonna di avere come dato valido il null

            $table->string('password');

            $table->rememberToken();

            $table->timestamps();


        });

/////////////////////////////////////////////////////////quello che ci interessa è quello riportato sopra











        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }








    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};