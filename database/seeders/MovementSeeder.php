<?php

namespace Database\Seeders;

use App\Models\Movement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movements = [
            [
                'title' => 'Barroco',
                'description' => 'El Barroco trasciende del arte. Fue un período cultural, científico, tecnológico, filosófico, político, económico… Aunque probablemente sea en el arte donde mejor se ilustra el clima del momento. El siglo XVII nace con cambios políticos (los estados modernos), religiosos (la contrarreforma), tecnológicos (el telescopio), económicos (crisis) y sociales (la burguesía). Con esa atmósfera surge un estilo anti-clásico, menos racional y más apasionado, una reacción contra lo anterior como suele -y debe- pasar a lo largo de la historia del arte. El arte se volvió dinámico, teatral, efectista. Busca sorprender, asombrar. Eso no quiere decir que se elimine el realismo. Todo lo contrario: se recrudece. En esa época de crisis económica, el hombre se enfrenta de forma más radical a la realidad. Aún así se distorsiona todo, se violenta. Se potencian los contrastes (el tenebrismo) y el desequilibrio.',
                'start' => 1600,
                'end' => 1750,
                'img' => 'movements/san-jeronimo-escribiendo.jpg',
            ],
            [
                'title' => 'Neoclasicismo',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'start' => 1750,
                'end' => 1820,
                'img' => 'movements/la-muerte-de-viriato.jpg',
            ],
            [
                'title' => 'Impresionismo',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'start' => 1872,
                'end' => 1882,
                'img' => 'movements/paseo-por-el-acantilado-de-pourville.jpg',
            ],
            [
                'title' => 'Manierismo',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'start' => 1550,
                'end' => 1610,
                'img' => 'movements/cristo-cargando-cruz-greco.jpg',
            ],
        ];


        foreach ($movements as $data) {
            Movement::create($data);
        }
    }
}
