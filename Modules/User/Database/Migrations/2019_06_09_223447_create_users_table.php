<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number', 14);
            $table->string('username');
            $table->string('password');
            $table->string('profile_image', 100)->nullable();
            $table->string('note')->nullable();
            $table->boolean('status')->default(0);
            $table->dateTime('last_login')->nullable();
            // $table->unsignedBigInteger('address_id')->nullable();
            // $table->foreign('address_id')
            //     ->references('id')->on('addresses')
            //     ->onDelete('cascade');
            // $table->unsignedBigInteger('contact_id')->nullable();;
            // $table->foreign('contact_id')
            //     ->references('id')->on('contacts')
            //     ->onDelete('cascade');
            $table->rememberToken();
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
