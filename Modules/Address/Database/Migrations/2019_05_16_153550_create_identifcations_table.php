<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentifcationsTable extends Migration
{ 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identifcations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('type')->default(0); // Sudan ID, Passport
            $table->string('identifcation_number');
            $table->date('issue_date')->nullable();
            $table->string('issue_place')->nullable();
            $table->unsignedBigInteger('identifcationable_id');
            $table->string('identifcationable_type')->nullable();
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
        Schema::dropIfExists('identifcations');
    }
}
