<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categorias = [
            [
                'nombre' => 'Mates',
                'descripcion' => 'Categoría de mates y recipientes.',
            ],
            [
                'nombre' => 'Historia',
                'descripcion' => 'Historia y tradiciones del mate.',
            ],
            [
                'nombre' => 'Consejos',
                'descripcion' => 'Consejos para disfrutar del mate.',
            ],
            [
                'nombre' => 'Cuidados',
                'descripcion' => 'Cuidados y mantenimiento de los mates.',
            ],
            [
                'nombre' => 'Productos',
                'descripcion' => 'Información sobre productos de MATEANDO.',
            ],
            [
                'nombre' => 'Accesorios',
                'descripcion' => 'Accesorios para preparar y disfrutar el mate.',
            ],
        ];

        foreach ($categorias as $categoria) {

            $existente = DB::table('categories')
                ->where('nombre', $categoria['nombre'])
                ->first();

            $datos = array_merge($categoria, [
                'updated_at' => now(),
            ]);

            if (!$existente) {
                $datos['created_at'] = now();
            }

            DB::table('categories')->updateOrInsert(
                ['nombre' => $categoria['nombre']],
                $datos
            );
        }
    }
}
