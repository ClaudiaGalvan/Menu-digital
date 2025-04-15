<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('base')->default('Queso de bola');
            $table->string('principal');
            $table->string('especial')->nullable();
            $table->text('extras')->nullable();
            $table->text('notas')->nullable();
            $table->decimal('precio_total', 8, 2);
            $table->string('estado')->default('pendiente');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
