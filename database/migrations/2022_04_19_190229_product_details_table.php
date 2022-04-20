<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('price')->nullable();
            $table->string('subsidy')->nullable();
            $table->string('usage')->nullable();
            $table->string('width')->nullable();
            $table->string('depth')->nullable();
            $table->string('power')->nullable();
            $table->string('engine_type')->nullable();
            $table->string('displacement')->nullable();
            $table->string('start_system')->nullable();
            $table->string('transmissions')->nullable();
            $table->string('handle_type')->nullable();
            $table->string('weight')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('fuel_capacity')->nullable();
            $table->string('fuel_consumption')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->string('rating by customers')->nullable();
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
        Schema::dropIfExists('product_details');
    }
}
