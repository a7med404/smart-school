<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('operations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pay_rul_id')->foreign()
            ->references('id')->on('pay_ruls')
            ->onDelete('cascade');
            $table->unsignedBigInteger('student_id')->foreign()
            ->references('id')->on('students')
            ->onDelete('cascade');
            $table->unsignedBigInteger('transaction')->foreign()
            ->references('id')->on('transactions')
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
        Schema::dropIfExists('operations');
    }
}
