<?php

use App\TiGoal;
use Illuminate\Database\Seeder;

class TiGoalsTableSeeder extends Seeder
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
            'Alineamiento de TI y estrategia de negocio', // 1
            'Cumplimiento y soporte de la TI al cumplimiento del negocio de las leyes y regulaciones externas', // 2
            'Compromiso de la dirección ejecutiva para tomar decisiones relacionadas con TI', // 3
            'Riesgos de negocio relacionados con las TI gestionados', // 4
            'Realización de beneficios del portafolio de Inversiones y Servicios relacionados con las TI', // 5
            'Transparencia de los costes, beneficios y riesgos de las TI' // 6
        ];
        foreach ($goals as $goal)
            TiGoal::create([
                'dimension' => 1,
                'description' => $goal
            ]);

        // Dimension 2
        $goals = [
            'Entrega de servicios de TI de acuerdo a los requisitos del negocio', // 7
            'Uso adecuado de aplicaciones, información y soluciones tecnológicas' // 8
        ];
        foreach ($goals as $goal)
            TiGoal::create([
                'dimension' => 2,
                'description' => $goal
            ]);

        // Dimension 3
        $goals = [
            'Agilidad de las TI', // 9
            'Seguridad de la información, infraestructura de procesamiento y aplicaciones', // 10
            'Optimización de activos, recursos y capacidades de las TI', // 11
            'Capacitación y soporte de procesos de negocio integrando aplicaciones y tecnología en procesos de negocio', // 12
            'Entrega de Programas que proporcionen beneficios a tiempo, dentro del presupuesto y satisfaciendo los requisitos y normas de calidad', // 13
            'Disponibilidad de información útil y fiable para la toma de decisiones', // 14
            'Cumplimiento de las políticas internas por parte de las TI' // 15
        ];
        foreach ($goals as $goal)
            TiGoal::create([
                'dimension' => 3,
                'description' => $goal
            ]);

        // Dimension 4
        $goals = [
            'Personal del negocio y de las TI competente y motivado', // 16
            'Conocimiento, experiencia e iniciativas para la innovación de negocio' // 17
        ];
        foreach ($goals as $goal)
            TiGoal::create([
                'dimension' => 4,
                'description' => $goal
            ]);
    }
}
