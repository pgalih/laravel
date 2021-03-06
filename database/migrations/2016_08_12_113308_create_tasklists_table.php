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
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('title');
            $table->string('status');
            $table->string('description');
            $table->string('priority');
            $table->string('efectivity');
            $table->timestamp('created_at');
        });

        Schema::table('tasks', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')
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
       Schema::drop('tasks');
    }
}
