<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_parents', function (Blueprint $table) {
            $table->bigIncrements('id');          
            $table->integer('mr_d')->default(0);  
            $table->string('name', 255);
            $table->integer('religion')->nullable();
            $table->integer('relation');
            $table->integer('nationality')->nullable();
            $table->string('qualification')->nullable();
            $table->string('job', 255)->nullable();
            $table->string('work_place', 255)->nullable();
            $table->integer('martial')->nullable();
            $table->string('phone_number', 14);
            $table->string('email', 14);
            $table->integer('is_die');
            $table->text('note')->nullable();
            
            $table->unsignedBigInteger('address_id')->nullable();
            $table->foreign('address_id')
                ->references('id')->on('addresses')
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
        Schema::dropIfExists('student_parents');
    }
}
