<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomPayClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom_pay_classes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('classroom_id')->foreign()
                ->references('id')->on('classrooms');
            $table->integer('pay_class_id')->foreign()
                ->references('id')->on('pay_classes');
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
        Schema::dropIfExists('classroom_pay_classes');
    }
}
