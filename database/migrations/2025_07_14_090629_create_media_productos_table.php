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
        Schema::create('media_productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->constrained()->onDelete('cascade');
            $table->enum('tipo_media', ['imagen', 'video'])->default('imagen');
            $table->string('ruta_media')->comment('Ruta del archivo');
            $table->string('texto_alternativo')->nullable()->comment('Texto para accesibilidad');
            $table->boolean('es_principal')->default(false)->comment('Imagen principal');
            $table->integer('orden')->default(0)->comment('Orden de visualización');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_productos');
    }
};
