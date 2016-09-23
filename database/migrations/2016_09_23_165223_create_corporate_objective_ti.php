<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporateObjectiveTi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_objective_ti', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('corporate_objective_id')->unsigned();
            $table->foreign('corporate_objective_id')->references('id')->on('corporate_goal_strategic_objective')->onDelete('cascade');

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
        Schema::drop('corporate_objective_ti');
    }
}
