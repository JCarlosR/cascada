<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CorporateGoalsTableSeeder::class);
        $this->call(TiGoalsTableSeeder::class);
        $this->call(MappingCorporateAndTiGoalsTableSeeder::class);
        $this->call(ProcessesTableSeeder::class);
        $this->call(MappingProcessesAndTiGoalsTableSeeder::class);

        // Demo data for the main user
        $this->call(StrategicObjectivesTableSeeder::class);
    }
}
