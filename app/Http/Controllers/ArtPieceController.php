<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Artist;
use App\Models\ArtPiece;
use Illuminate\Http\Request;

class ArtPieceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        // $artist = Artist::all();
        // return $artist;
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArtPiece $artPiece)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ArtPiece $artPiece)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArtPiece $artPiece)
    {
        //
    }
}
