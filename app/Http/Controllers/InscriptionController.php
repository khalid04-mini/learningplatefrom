<?php

namespace App\Http\Controllers;

use App\Http\Resources\InscriptionResource;
use App\Models\Inscription;
use App\Http\Requests\StoreInscriptionRequest;
use App\Http\Requests\UpdateInscriptionRequest;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $inscriptions = Inscription::all();
        return InscriptionResource::collection($inscriptions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInscriptionRequest $request)
    {
        //
        $data = $request->validated();
        $inscription = Inscription::create($data);
        return response()->json([
            'message' => 'Inscription created successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Inscription $inscription)
    {
        //
        return new InscriptionResource($inscription);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInscriptionRequest $request, Inscription $inscription)
    {
        //
        $data = $request->validated();
        $inscription->update($data);
        return response()->json([
            'message' => 'Inscription updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscription $inscription)
    {
        //
        $inscription->delete();
        return response()->json([
           'message' => 'Inscription deleted successfully',
        ]);
    }
}
