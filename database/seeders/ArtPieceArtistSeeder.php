<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\ArtistMovement;
use App\Models\ArtPiece;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtPieceArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $artists = Artist::all();
        $artPieces = ArtPiece::all();

        foreach ($artPieces as $artPiece) {
            // Asignar un solo artista aleatorio
            $assignedArtist = $artists->random()->id;
            $artPiece->artists()->attach($assignedArtist);
        }

    }

}
