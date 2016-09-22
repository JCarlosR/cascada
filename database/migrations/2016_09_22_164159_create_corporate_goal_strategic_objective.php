<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporateGoalStrategicObjective extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_goal_strategic_objective', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('goal_id')->unsigned();
            $table->foreign('goal_id')->references('id')->on('corporate_goals');

            $table->integer('objective_id')->unsigned();
            $table->foreign('objective_id')->references('id')->on('strategic_objectives');

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
        Schema::drop('corporate_goal_strategic_objective');
    }
}
