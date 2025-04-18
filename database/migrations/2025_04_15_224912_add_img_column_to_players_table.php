<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('players', function (Blueprint $table) { // Schema::table per modificare una tabella esistente

            $table->string('img')->nullable()->after('surname'); // se la colonna deve mantenere il percorso il percorso sara un tipo di dato string 
                                                                 // concateniamo il metodo nullable() e after() per indicare il posizionamento di img

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('players', function (Blueprint $table) {

            $table->dropColumn('img'); // Questo metodo elimina la colonna img

        });
    }
};
