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
        Schema::create('guias', function (Blueprint $table) {
            $table->id();
            $table->integer('id_compra');
            $table->date('fecha');
            $table->bigInteger('cantidad');
            $table->integer('numero_oc');
            $table->string('comentario');
            $table->string('estado_firma');
            $table->integer('id_cilindro');
            $table->integer('rbd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guias');
    }
};