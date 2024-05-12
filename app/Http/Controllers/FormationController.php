<?php

namespace App\Http\Controllers;

use App\Http\Resources\FormationResource;
use App\Models\Formation;
use App\Http\Requests\StoreFormationRequest;
use App\Http\Requests\UpdateFormationRequest;
use App\Models\Salle;
use Illuminate\Support\Facades\Log;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $formations = Formation::all();
        return response()->json([
           'formations' => FormationResource::collection($formations),
            'message' => "List of all formations"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormationRequest $request)
    {
        // only admin
        $data = $request->validated();

        $formation = Formation::create($data);
        $salle_id = $data['salle_id'];
        $salle = Salle::find($salle_id);
        $salle['disponible']=0;
        return response()->json([
            'formation' => new FormationResource($formation),
            'message' => 'Formation created successfully'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Formation $formation)
    {
        //
        return new FormationResource($formation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormationRequest $request, Formation $formation)
    {
        // only admin
        $data = $request->validated();
        $formation->update($data);

        return response()->json([
            'formation' => new FormationResource($formation),
            'message' => 'Formation updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formation $formation)
    {
        // only admin
        $formation->delete();
        return response('',204);

    }
}
