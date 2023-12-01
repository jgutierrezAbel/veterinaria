<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
     
    
    public function up(): void
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_mascota');
            $table->string('id_especialidad');
            $table->date('fecha_nac');
            $table->string('id_cli');
            $table->string('id_generomas');
<<<<<<< HEAD
            $table->string('id_tipo');
=======
            $table->string('tipomas');
>>>>>>> 8eebf898854990bbd7b897694b6790e769fbc8b8
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
