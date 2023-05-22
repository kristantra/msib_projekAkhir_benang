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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fabric_type_id');
            $table->string('name');
            $table->string('color');
            $table->string('color_code'); //hex value
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedDecimal('quantity_kg', 10, 2);
            $table->timestamps();

            $table->foreign('fabric_type_id')->references('id')->on('fabric_types')->onDelete('cascade');
        });
    }

    /**a
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
