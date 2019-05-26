<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('full_name');
            $table->boolean('gender');
            $table->integer('religion')->nullable();
            $table->date('birth_date');
            $table->integer('managament_id')->foreign()
            ->references('id')->on('management')
            ->onDelete('cascade');
            $table->integer('department_id')->foreign()
            ->references('id')->on('department')
            ->onDelete('cascade');
            $table->date('hiring_date')->nullable();
            $table->string('job_title')->nullable();
            $table->integer('martial_status');
            $table->date('start_date')->nullable();
            $table->integer('emploee_level');
            $table->integer('join_year');
            $table->string('picture')->nullable();
            $table->longText('note')->nullable();
            
            $table->integer('identifcation_id')->foreign()
            ->references('id')->on('identifcations')
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
        Schema::dropIfExists('employees');
    }
}
