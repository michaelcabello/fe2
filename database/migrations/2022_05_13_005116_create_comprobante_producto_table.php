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
        Schema::create('comprobante_producto', function (Blueprint $table) {
            $table->id();

            $table->double('cant', 8, 2)->nullable();
            $table->double('price', 8, 2)->nullable();//precio venta
            $table->double('subtotal', 8, 2)->nullable();

            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->unsignedBigInteger('comprobante_id')->nullable();
            $table->foreign('comprobante_id')->references('id')->on('comprobantes')->onDelete('cascade');

            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');

            $table->string('codigobarras')->nullable();
            $table->double('mtobaseigv', 8, 2)->nullable();
            $table->double('igv', 8, 2)->nullable();
            $table->double('icbper', 8, 2)->nullable();
            $table->double('totalimpuestos', 8, 2)->nullable();
            $table->double('mtovalorventa', 8, 2)->nullable();


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
        Schema::dropIfExists('comprobante_producto');
    }
};
