<?php

namespace App\Http\Controllers;

use App\Http\Resources\SalleResource;
use App\Models\Salle;
use App\Http\Requests\StoreSalleRequest;
use App\Http\Requests\UpdateSalleRequest;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $salles = Salle::all();
        return response()->json([
            'salles' => SalleResource::collection($salles),
            'message' => "Liste des salles"
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSalleRequest $request)
    {
        //
        $data = $request->validated();
        $salle = Salle::create($data);
        return response()->json([
            'message'=>'Salle a été crée avec succès'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Salle $salle)
    {
        //
        return new SalleResource($salle);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSalleRequest $request, Salle $salle)
    {
        //
        $data = $request->validated();
        $salle->update($data);
        return response()->json([
            'message'=>'Salle a été modifié avec succès'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salle $salle)
    {
        //
        $salle->delete();
        return response()->json([
            'message'=>'Salle a été supprimé avec succès'

        ]);
    }
}
