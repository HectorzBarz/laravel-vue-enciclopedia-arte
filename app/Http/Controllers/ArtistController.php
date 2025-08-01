<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();
        return response()->json($artists);
    }

    /**
     * Display a listing of 3 resources.
     */
    public function home()
    {
        $artists = Artist::orderByDesc('id')->limit(3)->get();
        return response()->json($artists);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artist = Artist::find($id);

        if (!$artist) {
            return response()->json(['message' => 'Artista no encontrado'], 404);
        }

        return response()->json($artist);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getArtPieces($id)
    {
        $artist = Artist::findOrFail($id);
        $artPieces = $artist->artPieces()->limit(3)->get();
        return response()->json($artPieces);
    }

}
