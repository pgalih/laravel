<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasklists', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('task_title');
            $table->string('task_description');
            $table->string('task_priority');
            $table->string('task_efectivity');
            $table->timestamp('task_created_at');
        });

         Schema::table('tasklists', function(Blueprint $table){
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')
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
       Schema::drop('tasklists');
    }
}
