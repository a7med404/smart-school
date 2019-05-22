<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissiontodepartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissiontodeparts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->text('note')->nullable();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')
                ->references('id')->on('students')
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
        Schema::dropIfExists('permissiontodeparts');
    }
}
