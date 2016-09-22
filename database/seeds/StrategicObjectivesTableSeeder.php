<?php

use App\StrategicObjective;
use Illuminate\Database\Seeder;

class StrategicObjectivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StrategicObjective::create([
            'user_id' => 1,
            'description' => 'Incrementar el nivel de utilidades',
            'dimension' => 1
        ]);

        StrategicObjective::create([
            'user_id' => 1,
            'description' => 'Alcanzar un alto nivel de satisfacción del usuario',
            'dimension' => 2
        ]);

        StrategicObjective::create([
            'user_id' => 1,
            'description' => 'Ser una empresa líder que se desenvuelve bajo estándares internacionales de calidad',
            'dimension' => 3
        ]);
        StrategicObjective::create([
            'user_id' => 1,
            'description' => 'Tener la mayor efectividad del mercado de servicio de encomiendas',
            'dimension' => 3
        ]);
        StrategicObjective::create([
            'user_id' => 1,
            'description' => 'Contar con las TI para impulsar en crecimiento de la organización',
            'dimension' => 3
        ]);

        StrategicObjective::create([
            'user_id' => 1,
            'description' => 'Definir un plan de capacitación del personal en todos los niveles',
            'dimension' => 4
        ]);
        StrategicObjective::create([
            'user_id' => 1,
            'description' => 'Contar con todas las áreas productivas trabajando de forma ordenada y eficiente',
            'dimension' => 4
        ]);
    }
}
