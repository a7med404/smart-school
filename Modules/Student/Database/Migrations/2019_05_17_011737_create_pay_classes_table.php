<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_classes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('academic_year');
            $table->integer('level_id');
            /* $table->integer('level_id')->foreign()
                ->references('id')->on('levels'); */
            $table->integer('classroom_id');
                /* $table->foreign('classroom_id')
                    ->references('id')->on('classrooms'); */
            $table->integer('pay_rul_id');
            /* $table->integer('pay_rul_id')->foreign()
                ->references('id')->on('pay_ruls'); */

             $table->float('value');
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
        Schema::dropIfExists('pay_classes');
    }
}
