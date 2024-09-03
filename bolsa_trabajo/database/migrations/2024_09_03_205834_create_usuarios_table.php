<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('usuarios', function (Blueprint $table) {
        $table->id();
        $table->string('nombre_rs');
        $table->string('dni')->nullable();
        $table->string('ruc')->nullable();
        $table->string('correo')->unique();
        $table->string('celular')->nullable();
        $table->tinyInteger('rol'); // 1:Admin, 2:empresa, 3:postulante, 4:supervisor
        $table->string('user')->unique();
        $table->string('password');
        $table->string('archivo_cv')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
