<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaiementResource;
use App\Models\Paiement;
use App\Http\Requests\StorePaiementRequest;
use App\Http\Requests\UpdatePaiementRequest;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return PaiementResource::collection(Paiement::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaiementRequest $request)
    {
        //
        $data = $request->validated();
        $paiement = Paiement::create($data);
        return response()->json([
            'message'=>'paiement a été ajouté'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Paiement $paiement)
    {
        //
        return new PaiementResource($paiement);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaiementRequest $request, Paiement $paiement)
    {
        //
        $data = $request->validated();
        $paiement->update($data);
        return response()->json([
            'message'=>'paiement a été modifié'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paiement $paiement)
    {
        //
        $paiement->delete();
        return response()->json([
            'message'=>'paiement a été supprimé'
        ]);
    }
}
