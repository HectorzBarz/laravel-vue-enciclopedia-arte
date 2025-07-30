<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistMovementController extends Controller
{

    public function getMovementsByArtist($id)
    {
        $artist = Artist::with('movements')->findOrFail($id);
        return response()->json($artist->movements);
    }

}
