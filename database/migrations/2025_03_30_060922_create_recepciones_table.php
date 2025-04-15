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
        Schema::create('recepciones', function (Blueprint $table) {
            $table->id('idRecepcion');
            $table->foreignId('idPedido')
                  ->constrained('pedidos', 'idPedido')  // ← Aquí estaba el error
                  ->onDelete('cascade');
        
            $table->foreignId('idPersona')
                  ->constrained('personas', 'idPersona')  // ← Aquí también especifica idPersona
                  ->onDelete('cascade');
        
            $table->timestamp('hora_recepcion')->useCurrent();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepciones');
    }
};
