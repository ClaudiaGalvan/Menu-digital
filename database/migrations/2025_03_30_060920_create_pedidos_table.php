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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('idPedido');
            $table->foreignId('idPersona')
                  ->constrained('personas', 'idPersona')  // ← Indica correctamente idPersona
                  ->onDelete('cascade');
            $table->timestamp('fecha_hora')->useCurrent();
            $table->string('estado')->default('pendiente');
            $table->decimal('total', 8, 2);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
