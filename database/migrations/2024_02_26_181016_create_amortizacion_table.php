<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmortizacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amortizaciones', function (Blueprint $table) {
            $table->string('prestamo')->primary();
            $table->integer('periodo');
            $table->double('capital');
            $table->double('interes');
            $table->double('saldo');
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amortizacion');
    }
}
