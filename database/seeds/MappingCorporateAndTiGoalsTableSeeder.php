<?php

use App\CorporateGoal;
use Illuminate\Database\Seeder;

class MappingCorporateAndTiGoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        CorporateGoal::find(1)->tiGoals()->attach([1, 3, 5, 7, 11, 13]);

        CorporateGoal::find(2)->tiGoals()->attach([1, 5, 7, 9, 12, 17]);

        CorporateGoal::find(3)->tiGoals()->attach([4, 10, 16]);

        CorporateGoal::find(4)->tiGoals()->attach([2, 10]);

        CorporateGoal::find(5)->tiGoals()->attach(6);

        CorporateGoal::find(6)->tiGoals()->attach([1, 7]);

        CorporateGoal::find(7)->tiGoals()->attach([4, 10, 14]);

        CorporateGoal::find(8)->tiGoals()->attach([1, 7, 9, 17]);

        CorporateGoal::find(9)->tiGoals()->attach([1, 14]);

        CorporateGoal::find(10)->tiGoals()->attach([4, 6, 11]);

        CorporateGoal::find(11)->tiGoals()->attach([1, 7, 8, 9, 12]);

        CorporateGoal::find(12)->tiGoals()->attach([5, 6, 11]);

        CorporateGoal::find(13)->tiGoals()->attach([1, 3, 13]);

        CorporateGoal::find(14)->tiGoals()->attach([8, 16]);

        CorporateGoal::find(15)->tiGoals()->attach([2, 10, 15]);

        CorporateGoal::find(16)->tiGoals()->attach(16);

        CorporateGoal::find(17)->tiGoals()->attach([9, 17]);

    }
}
