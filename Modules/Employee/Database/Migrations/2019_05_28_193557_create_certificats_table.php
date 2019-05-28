<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('Applicant');
            $table->integer('type');
            $table->string('major');
            $table->integer('degree');
            $table->date('qualification_date');
            $table->integer('experience_years');
            $table->integer('employee_id')->foreign()
            ->references('id')->on('employees')
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
        Schema::dropIfExists('certificats');
    }
}
