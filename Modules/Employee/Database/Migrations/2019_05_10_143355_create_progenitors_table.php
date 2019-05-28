<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgenitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progenitors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id')->foreign()
            ->references('id')->on('employees')
            ->onDelete('cascade');
            $table->float('amount')->unsigned();
            $table->integer('financial_year');
            $table->integer('safe_id');
            $table->date('date');
            $table->integer('months_number');
            $table->longText('note')->nullable();
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
        Schema::dropIfExists('progenitors');
    }
}
