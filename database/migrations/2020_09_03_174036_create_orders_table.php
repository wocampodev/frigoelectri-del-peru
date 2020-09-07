<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_id')->nullable();
            //$table->unsignedMediumInteger('quantity')->nullable();
            $table->string('name', 150);
            $table->char('phone', 14);
            $table->string('email', 80)->nullable();
            $table->date('date')->nullable();
            $table->text('message');
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services');
            //Ordenar servicio
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
