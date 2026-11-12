<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('posts')->insert([
    [
        'titulo' => 'La historia del mate',
        'contenido' => 'El mate es una de las bebidas más representativas de la cultura argentina. Su consumo forma parte de la vida cotidiana y es una tradición que se transmite de generación en generación. Más allá de la bebida, compartir un mate representa un momento de encuentro y conversación.',
        'autor' => 'MATEANDO',
        'categoria' => 'Historia',
        'fecha_publicacion' => now(),
    ],
    [
        'titulo' => '¿Cómo elegir el mate ideal?',
        'contenido' => 'Elegir un mate depende principalmente del gusto y la forma de uso de cada persona. El tamaño, el material y la forma pueden influir en la experiencia al momento de cebar. Los mates de calabaza son una opción tradicional y muy elegida por quienes disfrutan de una experiencia artesanal.',
        'autor' => 'MATEANDO',
        'categoria' => 'Consejos',
        'fecha_publicacion' => now(),
    ],
    [
        'titulo' => '¿Cómo curar un mate de calabaza?',
        'contenido' => 'Los mates de calabaza necesitan un proceso de curado antes de comenzar a utilizarlos. Este procedimiento ayuda a preparar el interior del recipiente y contribuye a mejorar su uso posterior. Una forma tradicional consiste en colocar yerba usada dentro del mate, agregar agua y dejarlo reposar durante varias horas.',
        'autor' => 'MATEANDO',
        'categoria' => 'Cuidados',
        'fecha_publicacion' => now(),
    ],
    [
        'titulo' => 'Mate Imperial vs. Mate Camionero',
        'contenido' => 'El Mate Imperial y el Mate Camionero son dos estilos muy conocidos entre los amantes del mate. El Mate Imperial se caracteriza por su presentación clásica y artesanal, mientras que el Mate Camionero suele destacarse por su diseño y practicidad para el uso cotidiano.',
        'autor' => 'MATEANDO',
        'categoria' => 'Productos',
        'fecha_publicacion' => now(),
    ],
    [
        'titulo' => 'Accesorios indispensables para el mate',
        'contenido' => 'Preparar un buen mate no depende solamente del recipiente. Algunos accesorios pueden hacer que la experiencia sea mucho más cómoda. La bombilla es uno de los elementos principales, mientras que un buen termo permite mantener el agua a una temperatura adecuada durante más tiempo.',
        'autor' => 'MATEANDO',
        'categoria' => 'Accesorios',
        'fecha_publicacion' => now(),
    ],
    ]);

    }
}
