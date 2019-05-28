<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100)->unique();
            $table->integer('sort')->unique();
            $table->integer('max_student_number');
            
            $table->unsignedBigInteger('level_id');
            $table->foreign('level_id')
                ->references('id')->on('levels')
                ->onDelete('cascade'); 
            $table->unsignedBigInteger('classroom_id');
            $table->foreign('classroom_id')
                ->references('id')->on('classrooms')
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
        Schema::dropIfExists('parts');
    }
}
