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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->comment('URL amigable');
            $table->text('descripcion')->comment('Descripción detallada');
            $table->text('caracteristicas')->nullable()->comment('Características técnicas');
            $table->decimal('precio', 10, 2)->comment('Precio unitario');
            $table->decimal('precio_descuento', 10, 2)->nullable()->comment('Precio con descuento');
            $table->integer('cantidad_stock')->default(0)->comment('Inventario disponible');
            $table->string('sku')->unique()->nullable()->comment('Identificador único');
            $table->foreignId('categoria_id')->constrained('categorias')->comment('Categoría principal');
            $table->boolean('destacado')->default(false)->comment('Producto destacado');
            $table->boolean('disponible')->default(true)->comment('Disponible para venta');
            $table->unsignedInteger('visitas')->default(0)->comment('Contador de visitas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
