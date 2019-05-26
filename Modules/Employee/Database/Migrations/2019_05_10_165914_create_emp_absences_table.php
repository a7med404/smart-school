<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_absences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('empolyee_id')->foreign()
            ->references('id')->on('empolyees')
            ->onDelete('cascade');
            $table->date('absence_from');
            $table->date('absence_to');
            $table->text('absence_reason')->nullable();

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
        Schema::dropIfExists('emp_absences');
    }
}
