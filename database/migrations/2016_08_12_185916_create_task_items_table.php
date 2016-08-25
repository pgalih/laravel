<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_items', function (Blueprint $table) 
        {
            $table->increments('id')->unique();
            $table->unsignedInteger('task_id')->nullable();
            $table->string('title');
            $table->string('status');
            $table->string('description');
            $table->timestamps();
        });

        Schema::table('task_items', function(Blueprint $table)
        {
            $table->foreign('task_id')->references('id')->on('tasks')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('task_items');
    }
}
