<?php

namespace App\Http\Controllers;

use App\Http\Resources\FormateurResource;
use App\Models\Formateur;
use App\Http\Requests\StoreFormateurRequest;
use App\Http\Requests\UpdateFormateurRequest;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $formateurs = Formateur::all();
//        return $formateurs->get();
        return FormateurResource::collection($formateurs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormateurRequest $request)
    {
        // only admin
        $data = $request->validated();
        $formateur = Formateur::create($data);
        return response()->json([
            'message' => 'Formateur created successfully',
        ],201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Formateur $formateur)
    {
        // admin and formateur
        return new FormateurResource($formateur);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormateurRequest $request, Formateur $formateur)
    {
        // admin and formateur
        $data = $request->validated();
        $formateur->update($data);
        return response()->json([
            'message' => 'Formateur updated successfully',
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formateur $formateur)
    {
        //
        $formateur->delete();
        return response()->json([
            'message' => 'Formateur deleted successfully',
        ],204);
    }
}
