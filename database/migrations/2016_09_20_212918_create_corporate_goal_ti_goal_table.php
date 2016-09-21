<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporateGoalTiGoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_goal_ti_goal', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('corporate_goal_id')->unsigned();
            $table->foreign('corporate_goal_id')->references('id')->on('corporate_goals');

            $table->integer('ti_goal_id')->unsigned();
            $table->foreign('ti_goal_id')->references('id')->on('ti_goals');

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
        Schema::drop('corporate_goal_ti_goal');
    }
}
