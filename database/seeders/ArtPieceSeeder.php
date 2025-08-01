<?php

namespace Database\Seeders;

use App\Models\ArtPiece;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtPieceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pieces = [
            [
                'title' => 'El coloso',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'date' => 1812,
                'img' => 'pieces/el-coloso.jpg',
            ],
            [
                'title' => 'Las lanzas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'date' => 1635,
                'img' => 'pieces/las-lanzas.jpg',
            ],
            [
                'title' => 'La purificación del templo',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'date' => 1570,
                'img' => 'pieces/la-purificacion-del-templo.jpg',
            ],
            [
                'title' => 'Ciudad sobre una roca',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'date' => 1875,
                'img' => 'pieces/ciudad-sobre-una-roca.jpg',
            ],
            [
                'title' => 'El aguador de Sevilla',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'date' => 1621,
                'img' => 'pieces/el-aguador-de-sevilla.jpg',
            ],
            [
                'title' => 'La fábula',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'date' => 1580,
                'img' => 'pieces/fabula-greco.jpg',
            ],
            [
                'title' => 'Duelo a garrotazos',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'date' => 1823,
                'img' => 'pieces/duelo-a-garrotazos.jpg',
            ],
            [
                'title' => 'Vieja friendo huevos',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'date' => 1618,
                'img' => 'pieces/vieja-friendo-huevos.jpg',
            ],
            [
                'title' => 'Verónica',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'date' => 1580,
                'img' => 'pieces/veronica-greco.jpg',
            ],

        ];

        foreach ($pieces as $data) {
            ArtPiece::create($data);
        }

    }
}
