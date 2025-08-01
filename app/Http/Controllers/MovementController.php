<?php

namespace App\Http\Controllers;

use App\Models\Movement;
use Illuminate\Http\Request;

class MovementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movements = Movement::all();
        return response()->json($movements);
    }

    /**
     * Display a listing of 3 resources.
     */
    public function home()
    {
        $movements = Movement::orderByDesc('id')->limit(3)->get();
        return response()->json($movements);
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
        $movement = Movement::find($id);

        if (!$movement) {
            return response()->json(['message' => 'Movimiento no encontrada'], 404);
        }

        return response()->json($movement);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movement $movement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movement $movement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movement $movement)
    {
        //
    }

    public function getArtPieces($id)
    {
        $movement = Movement::findOrFail($id);
        $artPieces = $movement->artPieces()->limit(8)->get();
        return response()->json($artPieces);
    }
}
