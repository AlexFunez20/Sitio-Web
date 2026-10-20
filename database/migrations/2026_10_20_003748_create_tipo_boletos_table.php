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
        Schema::create('tipo_boletos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evento_id')->constrained()->cascadeOnDelete();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10, 2);
            $table->unsignedInteger('cantidad_disponible')->default(0);
            $table->boolean('activo')->default(true);
            $table->timestamps();

            $table->unique(['evento_id', 'nombre']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_boletos');
    }
};
