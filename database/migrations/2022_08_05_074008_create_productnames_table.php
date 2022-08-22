<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductnamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productnames', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->bigInteger('portal_id')->unsigned();
            $table->string('product_link');
            $table->string('share_link');
            $table->bigInteger('visitor')->default(0);
            $table->integer('status')->default(0);
            $table->timestamps();

            $table->foreign('portal_id')->references('id')->on('protalnames');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productnames');
    }
}
