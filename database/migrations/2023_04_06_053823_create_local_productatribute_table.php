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
        Schema::create('local_productatribute', function (Blueprint $table) {
            $table->id();

            $table->double('pricesale')->nullable();
            $table->double('pricewholesale')->nullable();
            $table->double('pricesalemin')->nullable();
            $table->double('stock');
            $table->double('stockmin')->nullable();

            $table->unsignedBigInteger('productatribute_id');
            $table->foreign('productatribute_id')->references('id')->on('productatributes')->onDelete('cascade');

            $table->unsignedBigInteger('local_id');
            $table->foreign('local_id')->references('id')->on('locals')->onDelete('cascade');

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
        Schema::dropIfExists('local_productatribute');
    }
};
