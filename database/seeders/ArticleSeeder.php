<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => "Anna Weyant conquista el Thyssen: una mirada contemporánea con alma antigua",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'type' => "Artistas",
                'img' => "articles/drives-me-crazy.jpg",
            ],
            [
                'title' => "El retorno del tesoro de Dahomey: justicia histórica en Benín",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'type' => "Obras",
                'img' => "articles/tesoro-de-dahomey.jpg",
            ],
            [
                'title' => "El secreto del cuadro más mirado del Prado: “El jardín de las delicias”",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'type' => "Obras",
                'img' => "articles/jardin-de-las-delicias.jpg",
            ],
            [
                'title' => "Ides Kihlen cumple 108 años: la pintora más longeva del arte argentino",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'type' => "Artistas",
                'img' => "articles/ides-kihlen.jpg",
            ],
        ];


        foreach ($articles as $data) {
            Article::create($data);
        }
    }
}
