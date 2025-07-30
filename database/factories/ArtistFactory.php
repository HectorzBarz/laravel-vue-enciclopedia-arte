<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Francisco de Goya',
            'country' => 'España',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, enim quis vestibulum euismod, neque nibh commodo nulla, a imperdiet ligula neque non sem. Phasellus id justo faucibus, posuere nisi quis, sodales nisl. Etiam vel sem ullamcorper, mattis neque et, laoreet leo. Nullam ac diam eget nisl pharetra vulputate. Suspendisse non tincidunt justo. Maecenas eget massa fermentum, tristique sem in, feugiat urna. Ut sit amet nisi nec ex vehicula vulputate ullamcorper nec leo. In condimentum tempor velit, sed cursus odio consequat quis. Integer sagittis diam id pulvinar vulputate. Nam volutpat nibh non dui consectetur tincidunt. Sed vitae sodales nunc.',
            'start' => 1746,
            'end' => 1828,
            'img' => 'artists/francisco-de-goya.jpg',
        ];
    }
}
