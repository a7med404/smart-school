<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Employee\Entities\Employee;
use Illuminate\Support\Facades\DB;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('full_name');
            $table->boolean('gender')->nullable();
            $table->integer('religion')->nullable();
            $table->date('birth_date')->nullable();
            $table->unsignedBigInteger('managament_id')->nullable()->foreign()
            ->references('id')->on('management')
            ->onDelete('cascade');
            $table->unsignedBigInteger('department_id')->nullable()->foreign()
            ->references('id')->on('department')
            ->onDelete('cascade');
            $table->date('hiring_date')->nullable();
            $table->string('job_title')->nullable();
            $table->integer('martial_status')->nullable();
            $table->date('start_date')->nullable();
            $table->integer('join_year')->nullable();
            $table->string('picture')->nullable();
            $table->longText('note')->nullable();
            
            $table->string('username')->unique()->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('employees')->insert([
            'full_name' => 'smart school',
            'username' => 'smartadmin',
            'password' => Hash::make('smartschool'),
            'created_at'=> new DateTime(), 
            'updated_at'=> new DateTime()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
