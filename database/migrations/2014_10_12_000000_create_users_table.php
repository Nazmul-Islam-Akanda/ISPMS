<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('contact_no');
            $table->string('email');
            $table->timestamp('email_varified_at')->nullable();
            $table->string('user_id')->unique();
            $table->string('password');
            $table->string('department_id')->nullable();
            $table->string('role')->nullable();
            $table->string('image');
            $table->string('reset_token')->nullable();
            $table->dateTime('reset_token_expire_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
