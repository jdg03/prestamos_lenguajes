<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
           
            $table->string('id')->primary(); // Se define el campo id como varchar y clave primaria
            $table->double('cuota');
            $table->double('monto');
            $table->double('tasa_de_interes');
            $table->integer('plazo');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamo');
    }
}
