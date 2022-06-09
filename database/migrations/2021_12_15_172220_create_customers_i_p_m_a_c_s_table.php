<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersIPMACSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_i_p_m_a_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name_id');
            $table->string('customer_id_id');
            $table->string('connection_type');
            $table->string('ip');
            $table->string('mac')->nullable();
            $table->string('approval')->default('Unapproved');
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
        Schema::dropIfExists('customers_i_p_m_a_c_s');
    }
}
