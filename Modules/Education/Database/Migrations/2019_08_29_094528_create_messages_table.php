<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('message');
            $table->text('reply');
            $table->boolean('is_read')->default(false);
            $table->unsignedBigInteger('student_parent_id')->nullable();
            $table->foreign('student_parent_id')
                ->references('id')->on('student_parents')
                ->onDelete('cascade');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id')
                ->references('id')->on('employees')
                ->onDelete('cascade');
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
        Schema::dropIfExists('messages');
    }
}
