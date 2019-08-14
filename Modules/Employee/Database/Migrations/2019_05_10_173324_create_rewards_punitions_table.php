<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRewardsPunitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards_punitions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('finance_year')->unsigned();
            $table->date('date');
            $table->boolean('type');
            $table->unsignedBigInteger('employee_id')->foreign()
            ->references('id')->on('employees')
            ->onDelete('cascade');
            $table->float('value')->unsigned();
            $table->longText('reason')->nullable();
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
        Schema::dropIfExists('rewards_punitions');
    }
}
