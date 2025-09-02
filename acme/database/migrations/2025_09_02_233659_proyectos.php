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
          {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plano_id')->constrained('planos');
            $table->foreignId('empleado_id')->constrained('empleados');
            $table->string('nombre_proyecto');
            $table->date('fecha_proyecto');
            $table->foreignId('user_id')->constrained('users');           
            $table->rememberToken();
            $table->timestamps();
         
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
