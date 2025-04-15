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
        Schema::create('detalles', function (Blueprint $table) {
            $table->id('idDetalle');
            $table->foreignId('idPedido')
                  ->constrained('pedidos', 'idPedido')  // ← Especifica claramente 'idPedido'
                  ->onDelete('cascade');
        
            $table->foreignId('idPlatillo')
                  ->constrained('platillos', 'idPlatillo')  // ← Asegúrate aquí también
                  ->onDelete('cascade');
        
            $table->integer('cantidad');
            $table->decimal('subtotal', 8, 2);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles');
    }
};
