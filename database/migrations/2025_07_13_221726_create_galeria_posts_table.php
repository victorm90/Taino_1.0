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
        Schema::create('galeria_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained()->onDelete('cascade')->comment('Post relacionado');
            $table->string('ruta_imagen')->comment('Ruta de almacenamiento');
            $table->string('texto_alternativo')->nullable()->comment('Accesibilidad y SEO');
            $table->string('titulo_imagen')->nullable()->comment('Título descriptivo');
            $table->integer('orden')->default(0)->comment('Orden en galería');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeria_posts');
    }
};
