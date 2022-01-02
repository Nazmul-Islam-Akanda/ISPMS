<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name_id');
            $table->string('customer_id_id');
            $table->string('due')->nullable();
            $table->string('advance')->nullable();
            $table->integer('payment');
            $table->string('month');
            $table->string('year');
            $table->string('collector_id')->nullable();
            $table->string('discount')->nullable();
            $table->string('reason')->nullable();
            $table->string('mobile_banking_id')->nullable();
            $table->string('number')->nullable();
            $table->string('txnid')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
