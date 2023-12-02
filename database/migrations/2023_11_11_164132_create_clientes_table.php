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
            $table->string('nombre',8);
            $table->string('apellido',8);
            $table->date('fecha_naci',);
            $table->string('id_nacionalidad',8);
            $table->string('id_genero',8);
            $table->timestamps();
        });
    }
    

    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
