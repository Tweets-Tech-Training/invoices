<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
          $table->integer('customer_id') ;
            $table->integer('city_id') ;
            $table->integer('coin_id') ;
            $table->string('status') ;
            $table->boolean('related');
            $table->string('payment') ;
            $table->string('number') ;
            $table->date('date');
            $table->string('image');
            $table->string('customerstatus') ;
            $table->decimal('totalprice', 10, 2);
            $table->decimal('tax', 10, 2);
            $table->decimal('result', 10, 2);
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
        Schema::dropIfExists('bills');
    }
}
