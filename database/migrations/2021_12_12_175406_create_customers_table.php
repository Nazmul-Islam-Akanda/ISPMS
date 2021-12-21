<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('block_id');
            $table->string('customer_name');
            $table->string('address');
            $table->integer('contact_no');
            $table->string('email');
            $table->string('customer_id');
            $table->date('date');
            $table->string('customer_type');
            $table->string('bill_type');
            $table->string('package_id');
            $table->string('charge')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('department_id');
            $table->string('lineman_name_id');
            $table->string('lineman_user_id_id');
            $table->string('image');
            //$table->string('status')->default('active');
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
        Schema::dropIfExists('customers');
    }
}
