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
        Schema::create('lote', function (Blueprint $table) {
            $table->integer('id_lote')->primary();
            $table->date('fecha_expiracion');
            $table->double('precio_compra');
            $table->integer('cantidad');
            $table->double('precio');
            $table->double('subtotal');
            $table->integer('id_compra');
            $table->integer('id_producto');
            $table->timestamps();
/*
            id_lote INT PRIMARY KEY,
            fecha_expiracion DATE,
            precio_compra DOUBLE,
            cantidad INT,
            precio DOUBLE,
            subtotal DOUBLE,
            id_compra INT ,
            id_producto INT,
*/


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lote');
    }
};
