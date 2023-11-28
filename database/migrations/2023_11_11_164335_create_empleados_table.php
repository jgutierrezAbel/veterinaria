<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
     
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nac');
            $table->string('id_genero');
            $table->string('id_departamento');
            $table->timestamps();
        });
    }
    

    
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
