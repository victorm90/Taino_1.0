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
        Schema::create('posts', function (Blueprint $table) {            
            $table->id();
            $table->string('titulo');
            $table->string('slug')->unique()->comment('URL amigable para SEO');
            $table->text('resumen')->nullable()->comment('Resumen visible en listados');
            $table->longText('contenido')->comment('Contenido completo del post');
            $table->foreignId('user_id')->constrained('users')->comment('Autor del contenido');
            $table->timestamp('fecha_publicacion')->nullable()->comment('Fecha programada para publicación');
            $table->enum('estado', ['borrador', 'publicado', 'archivado'])->default('borrador')->comment('Estado del post');
            $table->string('imagen_destacada')->nullable()->comment('Imagen principal del post');
            $table->unsignedInteger('visitas')->default(0)->comment('Contador de visitas');
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
