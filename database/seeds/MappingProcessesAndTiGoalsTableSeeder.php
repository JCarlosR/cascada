<?php

use App\TiGoal;
use Illuminate\Database\Seeder;

class MappingProcessesAndTiGoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TiGoal::find(1)->processes()->attach([
            'EDM01', 'EDM02',
            'APO01', 'APO02', 'APO03', 'APO05', 'APO07', 'APO08',
            'BAI01', 'BAI02'
        ]);

        TiGoal::find(2)->processes()->attach([
            'APO01', 'APO12', 'APO13',
            'BAI10',
            'DSS05',
            'MEA02', 'MEA03'
        ]);

        TiGoal::find(3)->processes()->attach([
            'EDM01', 'EDM05'
        ]);

        TiGoal::find(4)->processes()->attach([
            'EDM03',
            'APO10', 'APO12', 'APO13',
            'BAI01', 'BAI06',
            'DSS01', 'DSS02', 'DSS03', 'DSS04', 'DSS05', 'DSS06',
            'MEA01', 'MEA02', 'MEA03'
        ]);

        TiGoal::find(5)->processes()->attach([
            'EDM02',
            'APO04', 'APO05', 'APO06', 'APO11',
            'BAI01'
        ]);

        TiGoal::find(6)->processes()->attach([
            'EDM02', 'EDM03', 'EDM05',
            'APO06', 'APO12', 'APO13',
            'BAI09'
        ]);

        TiGoal::find(7)->processes()->attach([
            'EDM01', 'EDM02', 'EDM05',
            'APO02', 'APO08', 'APO09', 'APO10', 'APO11',
            'BAI02', 'BAI03', 'BAI04', 'BAI06',
            'DSS01', 'DSS02', 'DSS03', 'DSS04', 'DSS06',
            'MEA01'
        ]);

        TiGoal::find(8)->processes()->attach([
            'APO04',
            'BAI05', 'BAI07'
        ]);

        TiGoal::find(9)->processes()->attach([
            'EDM04',
            'APO01', 'APO03', 'APO04', 'APO10',
            'BAI08'
        ]);

        TiGoal::find(10)->processes()->attach([
            'EDM03',
            'APO12', 'APO13',
            'BAI06',
            'DSS05'
        ]);

        TiGoal::find(11)->processes()->attach([
            'EDM04',
            'APO01', 'APO03', 'APO04', 'APO07',
            'BAI04', 'BAI09', 'BAI10',
            'DSS01', 'DSS03',
            'MEA01'
        ]);

        TiGoal::find(12)->processes()->attach([
            'APO08',
            'BAI02', 'BAI07'
        ]);

        TiGoal::find(13)->processes()->attach([
            'APO05', 'APO07', 'APO11', 'APO12',
            'BAI01', 'BAI05'
        ]);

        TiGoal::find(14)->processes()->attach([
            'APO09',
            'BAI04', 'BAI10',
            'DSS03', 'DSS04'
        ]);

        TiGoal::find(15)->processes()->attach([
            'EDM03',
            'APO02',
            'MEA01', 'MEA02'
        ]);

        TiGoal::find(16)->processes()->attach([
            'EDM04',
            'APO01', 'APO07',
        ]);

        TiGoal::find(17)->processes()->attach([
            'EDM02',
            'APO01', 'APO02', 'APO04', 'APO07', 'APO08',
            'BAI05', 'BAI08'
        ]);

    }
}
