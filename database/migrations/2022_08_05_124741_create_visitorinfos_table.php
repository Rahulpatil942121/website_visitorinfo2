<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitorinfos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->string('country_name');
            $table->string('regionName');
            $table->string('city');
            $table->string('ip');
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('zipcode');
            $table->string('network_name');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('productnames');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitorinfos');
    }
}
