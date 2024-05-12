<?php

namespace App\Http\Controllers;

use App\Http\Resources\CentreResource;
use App\Models\Centre;
use App\Http\Requests\StoreCentreRequest;
use App\Http\Requests\UpdateCentreRequest;

class CentreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $centres = Centre::with('salles');
        return $centres->get();
        return CentreResource::collection($centres);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCentreRequest $request)
    {
        //
        $data = $request->validated();
        $centre = Centre::create($data);
        return response()->json([

            'message' => 'Successfully created Centre!'
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Centre $centre)
    {
        //
        return new CentreResource($centre);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCentreRequest $request, Centre $centre)
    {
        //
        $data = $request->validated();
        $centre->update($data);
        return response()->json([
            'message' => 'Successfully updated Centre!'
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Centre $centre)
    {
        //

        $centre->delete();
        return response()->json([
            'message' => 'Successfully deleted Centre!'
        ]);
    }
}
