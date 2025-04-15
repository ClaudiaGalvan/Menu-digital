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
        Schema::create('menus', function (Blueprint $table) {
            $table->id('idMenu');
            $table->string('nombre');
            $table->text('descripcion');
            $table->foreignId('idCategoria')
                  ->constrained('categorias', 'idCategoria')  // ← ESPECIFICA LA COLUMNA AQUÍ
                  ->onDelete('cascade');
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
