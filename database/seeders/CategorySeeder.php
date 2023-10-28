<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories_arr = [
            [
                'Comandos y Funciones Principales',
                'Incluye información sobre los comandos esenciales y las funciones clave del software.',
            ],
            [
                'Personalización y Configuración',
                'Detalla cómo personalizar y configurar el software para adaptarlo a las necesidades de cada cliente.',
            ],
            [
                'Integraciones y API',
                'Explora cómo integrar el software con otras herramientas y sistemas a través de API.',
            ],
            [
                'Automatización de Procesos',
                'Ofrece guías sobre cómo automatizar tareas y procesos para optimizar la gestión de talento.',
            ],
            [
                'Gestión de Datos y Reportes',
                'Proporciona información sobre cómo ingresar, modificar y extraer datos, así como generar informes relevantes.',
            ],
            [
                'Desarrollo de Plugins y Extensiones',
                'Si es posible, da detalles sobre cómo desarrollar plugins y extensiones personalizadas para el software.',
            ],
            [
                'Ejemplos de Casos de Uso',
                'Presenta ejemplos prácticos de cómo utilizar el software para abordar situaciones comunes.',
            ],
            [
                'Consejos de Optimización de Rendimiento',
                'Ofrece sugerencias para mejorar el rendimiento y la eficiencia del software.',
            ],
            [
                'Soporte y Resolución de Problemas Comunes',
                'Proporciona soluciones para los problemas más frecuentes que los usuarios pueden encontrar.',
            ],
            [
                'Actualizaciones y Novedades',
                'Informa sobre las últimas actualizaciones, nuevas características y mejoras del software.',
            ],
        ];

        foreach ($categories_arr as $category) {
            Category::create([
                'name' => $category[0],
                'slug' => Str::slug($category[0]),
                'description' => $category[1],
                'is_active' => true,
            ]);
        }

    }
}
