<?php

namespace Database\Seeders;

use App\Models\ArtPiece;
use App\Models\Movement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovementArtPiecesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movement = Movement::all();
        $artPieces = ArtPiece::all();


        foreach ($artPieces as $artPiece) {
            $assignedMovement = $movement->random();
            $assignedMovement->artPieces()->attach($artPiece->id);
        }

    }
}
