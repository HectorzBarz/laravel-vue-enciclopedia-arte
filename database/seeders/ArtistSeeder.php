<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $artists = [
            [
                'title' => 'Francisco de Goya',
                'country' => 'España',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'start' => 1746,
                'end' => 1828,
                'img' => 'artists/francisco-de-goya.jpg',
            ],
            [
                'title' => 'Diego Velázquez',
                'country' => 'España',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'start' => 1599,
                'end' => 1660,
                'img' => 'artists/diego-velazquez.jpg',
            ],
            [
                'title' => 'El Greco',
                'country' => 'España',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
                'start' => 1541,
                'end' => 1614,
                'img' => 'artists/el-greco.jpg',
            ],
        ];


        foreach ($artists as $data) {
            Artist::create($data);
        }


    }
}
