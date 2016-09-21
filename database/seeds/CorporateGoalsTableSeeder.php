<?php

use App\CorporateGoal;
use Illuminate\Database\Seeder;

class CorporateGoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dimension 1
        $goals = [
            'Valor para las partes interesadas de las Inversiones de Negocio', // 1
            'Cartera de productos y servicios competitivos', // 2
            'Riesgos de negocio gestionados (salvaguarda de activos)', // 3
            'Cumplimiento de leyes y regulaciones externas', // 4
            'Transparencia financiera' // 5
        ];
        foreach ($goals as $goal)
            CorporateGoal::create([
                'dimension' => 1,
                'description' => $goal
            ]);

        // Dimension 2
        $goals = [
            'Cultura de servicio orientada al cliente', // 6
            'Continuidad y disponibilidad del servicio de negocio', // 7
            'Respuestas ágiles a un entorno de negocio cambiante', // 8
            'Toma estratégica de Decisiones basada en Información', // 9
            'Optimización de costes de entrega del servicio' // 10
        ];
        foreach ($goals as $goal)
            CorporateGoal::create([
                'dimension' => 2,
                'description' => $goal
            ]);

        // Dimension 3
        $goals = [
            'Optimización de la funcionalidad de los procesos de negocio', // 11
            'Optimización de los costes de los procesos de negocio', // 12
            'Programas gestionados de cambio en el negocio', // 13
            'Productividad operacional y de los empleados', // 14
            'Cumplimiento con las políticas internas', // 15
        ];
        foreach ($goals as $goal)
            CorporateGoal::create([
                'dimension' => 3,
                'description' => $goal
            ]);

        // Dimension 4
        $goals = [
            'Personas preparadas y motivadas', // 16
            'Cultura de innovación de producto y negocio' // 17
        ];
        foreach ($goals as $goal)
            CorporateGoal::create([
                'dimension' => 4,
                'description' => $goal
            ]);
    }
}
