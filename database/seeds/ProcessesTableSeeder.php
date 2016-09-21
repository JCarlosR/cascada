<?php

use App\CobitProcess;
use Illuminate\Database\Seeder;

class ProcessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CobitProcess::create([
            'id' => 'EDM01',
            'description' => 'Asegurar el Establecimiento y Mantenimiento del Marco de Gobierno'
        ]);
        CobitProcess::create([
            'id' => 'EDM02',
            'description' => 'Asegurar la Entrega de Beneficios'
        ]);
        CobitProcess::create([
            'id' => 'EDM03',
            'description' => 'Asegurar la Optimización del Riesgo'
        ]);
        CobitProcess::create([
            'id' => 'EDM04',
            'description' => 'Asegurar la Optimización de los Recursos'
        ]);
        CobitProcess::create([
            'id' => 'EDM05',
            'description' => 'Asegurar la Transparencia hacia las partes interesadas'
        ]);


        CobitProcess::create([
            'id' => 'APO01',
            'description' => 'Gestionar el Marco de Gestión de TI'
        ]);
        CobitProcess::create([
            'id' => 'APO02',
            'description' => 'Gestionar la Estrategia'
        ]);
        CobitProcess::create([
            'id' => 'APO03',
            'description' => 'Gestionar la Arquitectura Empresarial'
        ]);
        CobitProcess::create([
            'id' => 'APO04',
            'description' => 'Gestionar la Innovación S'
        ]);
        CobitProcess::create([
            'id' => 'APO05',
            'description' => 'Gestionar el portafolio'
        ]);
        CobitProcess::create([
            'id' => 'APO06',
            'description' => 'Gestionar el Presupuesto y los Costes'
        ]);
        CobitProcess::create([
            'id' => 'APO07',
            'description' => 'Gestionar los Recursos Humanos'
        ]);
        CobitProcess::create([
            'id' => 'APO08',
            'description' => 'Gestionar las Relaciones'
        ]);
        CobitProcess::create([
            'id' => 'APO09',
            'description' => 'Gestionar los Acuerdos de Servicio'
        ]);
        CobitProcess::create([
            'id' => 'APO10',
            'description' => 'Gestionar los Proveedores'
        ]);
        CobitProcess::create([
            'id' => 'APO11',
            'description' => 'Gestionar la Calidad'
        ]);
        CobitProcess::create([
            'id' => 'APO12',
            'description' => 'Gestionar el Riesgo'
        ]);
        CobitProcess::create([
            'id' => 'APO13',
            'description' => 'Gestionar la Seguridad'
        ]);


        CobitProcess::create([
            'id' => 'BAI01',
            'description' => 'Gestionar los Programas y Proyectos'
        ]);
        CobitProcess::create([
            'id' => 'BAI02',
            'description' => 'Gestionar la Definición de Requisitos'
        ]);
        CobitProcess::create([
            'id' => 'BAI03',
            'description' => 'Gestionar la Identificación y la Construcción de Soluciones'
        ]);
        CobitProcess::create([
            'id' => 'BAI04',
            'description' => 'Gestionar la Disponibilidad y la Capacidad'
        ]);
        CobitProcess::create([
            'id' => 'BAI05',
            'description' => 'Gestionar la introducción de Cambios Organizativos'
        ]);
        CobitProcess::create([
            'id' => 'BAI06',
            'description' => 'Gestionar los Cambios'
        ]);
        CobitProcess::create([
            'id' => 'BAI07',
            'description' => 'Gestionar la Aceptación del Cambio y de la Transición'
        ]);
        CobitProcess::create([
            'id' => 'BAI08',
            'description' => 'Gestionar el Conocimiento'
        ]);
        CobitProcess::create([
            'id' => 'BAI09',
            'description' => 'Gestionar los Activos'
        ]);
        CobitProcess::create([
            'id' => 'BAI10',
            'description' => 'Gestionar la Configuración'
        ]);


        CobitProcess::create([
            'id' => 'DSS01',
            'description' => 'Gestionar las Operaciones'
        ]);
        CobitProcess::create([
            'id' => 'DSS02',
            'description' => 'Gestionar las Peticiones y los Incidentes del Servicio'
        ]);
        CobitProcess::create([
            'id' => 'DSS03',
            'description' => 'Gestionar los Problemas'
        ]);
        CobitProcess::create([
            'id' => 'DSS04',
            'description' => 'Gestionar la Continuidad'
        ]);
        CobitProcess::create([
            'id' => 'DSS05',
            'description' => 'Gestionar los Servicios de Seguridad'
        ]);
        CobitProcess::create([
            'id' => 'DSS06',
            'description' => 'Gestionar los Controles de los Procesos del Negocio'
        ]);


        CobitProcess::create([
            'id' => 'MEA01',
            'description' => 'Supervisar, Evaluar y Valorar Rendimiento y Conformidad'
        ]);
        CobitProcess::create([
            'id' => 'MEA02',
            'description' => 'Supervisar, Evaluar y Valorar el Sistema de Control Interno'
        ]);
        CobitProcess::create([
            'id' => 'MEA03',
            'description' => 'Supervisar, Evaluar y Valorar la Conformidad con los Requerimientos Externos'
        ]);
    }
}
