<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categoria = DB::table('categories')
            ->where('nombre', 'Mates')
            ->first();

        $productos = [
            [
                'nombre' => 'Mate Imperial',
                'descripcion' => 'Mate de calabaza forrado en cuero, de estilo clásico y artesanal.',
                'precio' => 25000,
                'stock' => 10,
            ],
            [
                'nombre' => 'Mate Camionero',
                'descripcion' => 'Mate de calabaza con diseño camionero, resistente y cómodo para el uso diario.',
                'precio' => 18000,
                'stock' => 8,
            ],
            [
                'nombre' => 'Mate Torpedo',
                'descripcion' => 'Mate de calabaza de formato torpedo, ideal para cebar cómodamente.',
                'precio' => 22000,
                'stock' => 6,
            ],
            [
                'nombre' => 'Mate Algarrobo',
                'descripcion' => 'Mate de madera de algarrobo con acabado artesanal y diseño tradicional.',
                'precio' => 15000,
                'stock' => 12,
            ],
            [
                'nombre' => 'Mate Uruguayo',
                'descripcion' => 'Mate de calabaza de estilo uruguayo, pensado para una yerba abundante.',
                'precio' => 20000,
                'stock' => 7,
            ],
        ];

        foreach ($productos as $producto) {

            $existente = DB::table('products')
                ->where('nombre', $producto['nombre'])
                ->first();

            $datos = array_merge($producto, [
                'category_id' => $categoria->id,
                'updated_at' => now(),
            ]);

            if (!$existente) {
                $datos['created_at'] = now();
            }

            DB::table('products')->updateOrInsert(
                ['nombre' => $producto['nombre']],
                $datos
            );
        }
    }
}
