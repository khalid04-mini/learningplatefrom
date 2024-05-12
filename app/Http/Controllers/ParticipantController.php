<?php

namespace App\Http\Controllers;

use App\Http\Resources\ParticipantResource;
use App\Models\Participant;
use App\Http\Requests\StoreParticipantRequest;
use App\Http\Requests\UpdateParticipantRequest;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $participants = Participant::all();
        //return $participants->paginate(10);
        return  ParticipantResource::collection($participants);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreParticipantRequest $request)
    {
        //
        $data = $request->validated();
        $participant = Participant::create($data);
        return response()->json([
            'message' => 'Participant created successfully',
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Participant $participant)
    {
        //
        return new ParticipantResource($participant);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParticipantRequest $request, Participant $participant)
    {
        //
        $data = $request->validated();
        $participant->update($data);
        return response()->json([
            'message' => 'Participant updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participant $participant)
    {
        //
        $participant->delete();
        return response()->json([
            'message' => 'Participant deleted successfully',
        ]);
    }
}
