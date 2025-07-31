<?php

namespace Database\Seeders;

use App\Models\ArtistMovement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        ArtistMovement::insert([
            ['artist_id' => 1, 'movement_id' => 1],
            ['artist_id' => 1, 'movement_id' => 2],
            ['artist_id' => 1, 'movement_id' => 3],
            ['artist_id' => 2, 'movement_id' => 1],
            ['artist_id' => 3, 'movement_id' => 4],
            // Agrega más relaciones según necesites
        ]);

    }
}
