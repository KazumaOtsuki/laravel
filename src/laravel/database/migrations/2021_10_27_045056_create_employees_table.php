<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('employee_id');
            $table->string('employee_code',256);
            $table->string('employee_name', 40);
            $table->bigInteger('department_id')->unsigned();
            $table->bigInteger('gender_id')->unsigned();
            $table->timestamps();
            //$table->primary('employee_id');
            $table->foreign('department_id')->references('department_id')->on('departments');
            $table->foreign('gender_id')->references('gender_id')->on('genders');
            //$table->unique(['department_id', 'gender_id'],'uq_employees');
        });
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
