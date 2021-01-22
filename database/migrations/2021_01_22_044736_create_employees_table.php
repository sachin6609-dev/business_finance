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
            $table->increments('id');
            $table->string('emp_name');
            $table->bigInteger('emp_mobile');
            $table->string('emp_personal_email')->nullable();
            $table->string('emp_company_email')->nullable();
            $table->string('emp_role')->nullable();
            $table->string('emp_bankAccount')->nullable();
            $table->integer('emp_assigned_project');
            $table->date('emp_joinDate')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
