<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBearInMindsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bear_in_minds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('note');
            $table->date('date');
            $table->integer('empolyee_id')->foreign()->references('id')->on('empolyees');
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
        Schema::dropIfExists('bear_in_minds');
    }
}
