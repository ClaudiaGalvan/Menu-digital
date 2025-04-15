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
        Schema::create('personalizaciones', function (Blueprint $table) {
            $table->id('idPersonalizacion');
            $table->foreignId('idPlatillo')
                  ->constrained('platillos', 'idPlatillo')  // ← Especifica claramente 'idPlatillo'
                  ->onDelete('cascade');
            $table->foreignId('idIngrediente')
                  ->constrained('ingredientes', 'idIngrediente') // ← asegúrate también aquí
                  ->onDelete('cascade');
            $table->integer('cantidad');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personalizaciones');
    }
};
