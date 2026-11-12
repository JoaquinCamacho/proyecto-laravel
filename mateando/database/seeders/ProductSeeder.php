<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'nombre' => 'Mate Imperial',
                'descripcion' => 'Mate de calabaza forrado en cuero, de estilo clásico y artesanal.',
                'precio' => 25000,
                'stock' => 10,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'nombre' => 'Mate Camionero',
                'descripcion' => 'Mate de calabaza con diseño camionero, resistente y cómodo para el uso diario.',
                'precio' => 18000,
                'stock' => 8,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'nombre' => 'Mate Torpedo',
                'descripcion' => 'Mate de calabaza de formato torpedo, ideal para cebar cómodamente.',
                'precio' => 22000,
                'stock' => 6,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'nombre' => 'Mate Algarrobo',
                'descripcion' => 'Mate de madera de algarrobo con acabado artesanal y diseño tradicional.',
                'precio' => 15000,
                'stock' => 12,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'nombre' => 'Mate Uruguayo',
                'descripcion' => 'Mate de calabaza de estilo uruguayo, pensado para una yerba abundante.',
                'precio' => 20000,
                'stock' => 7,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ]);
    }
}
