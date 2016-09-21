<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessTiGoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('cobit_process_ti_goal', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ti_goal_id')->unsigned();
            $table->foreign('ti_goal_id')->references('id')->on('ti_goals');

            $table->string('cobit_process_id');
            $table->foreign('cobit_process_id')->references('id')->on('cobit_processes');

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
        Schema::drop('cobit_process_ti_goal');
    }
}
