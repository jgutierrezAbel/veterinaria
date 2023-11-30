<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   

     
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_naci');
            $table->string('id_genero');
=======
            $table->string('nombre',8);
            $table->string('apellido',8);
            $table->date('fecha_naci',);
            $table->string('id_nacionalidad',8);
            $table->string('id_genero',8);
>>>>>>> 982d58230624b77bcb7995c7b5f83da9406d9821
            $table->timestamps();
        });
    }
    

    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
