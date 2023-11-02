<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nombre_producto');
            $table->integer('stock');
            $table->string('stock_minimo');
            $table->string('presentacion');
            $table->string('medida');
            $table->string('restriccion_venta');
            $table->string('descripcion');
            $table->string('locacion');
            $table->string('codigo_barras');
            $table->unsignedBigInteger('id_laboratorio');
            $table->unsignedBigInteger('id_categoria');

            $table->foreign('id_laboratorio')
                ->references('id')
                ->on('laboratorio')
                ->onDelete('cascade');

            $table->foreign('id_categoria') 
                ->references('id')
                ->on('categoria')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
};