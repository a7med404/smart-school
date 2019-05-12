<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddCalendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_calends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('manage_id')->foreign()->references('id')->on('management');
            $table->integer('dept_id')->foreign()->references('id')->on('department');
            $table->longText('celand_name');
            $table->date('date');
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
        Schema::dropIfExists('add_calends');
    }
}
