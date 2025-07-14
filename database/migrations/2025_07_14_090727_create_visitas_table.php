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
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->morphs('visitable'); // Polimórfico: posts, productos, etc.
            $table->ipAddress('ip')->nullable()->comment('IP del visitante');
            $table->string('user_agent')->nullable()->comment('Navegador del visitante');
            $table->string('referer')->nullable()->comment('Sitio de procedencia');
            $table->timestamp('fecha_visita')->useCurrent()->comment('Fecha y hora de la visita');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitas');
    }
};
