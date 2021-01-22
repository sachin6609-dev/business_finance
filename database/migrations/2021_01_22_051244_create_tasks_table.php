<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_name')->nullable();
            $table->string('module_name')->nullable();
            $table->string('task_name');
            $table->integer('assign_to');
            $table->enum('task_status',['Pending','Inprogress','Completed'])->default('Inprogress');
            $table->dateTime('task_start');
            $table->dateTime('task_end')->nullable();
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
        Schema::drop('tasks');
    }
}
