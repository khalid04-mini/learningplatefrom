<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentaireResource;
use App\Models\Commentaire;
use App\Http\Requests\StoreCommentaireRequest;
use App\Http\Requests\UpdateCommentaireRequest;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $commentaires = Commentaire::all();
        return CommentaireResource::collection($commentaires);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentaireRequest $request)
    {
        //
        $data = $request->validated();
        $commentaire = Commentaire::create($data);
        return response()->json([
            'message'=>'commentaire ajouté'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Commentaire $commentaire)
    {
        //
        return new CommentaireResource($commentaire);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentaireRequest $request, Commentaire $commentaire)
    {
        //
        $data = $request->validated();
        $commentaire->update($data);
        return response()->json([
            'message'=>'commentaire modifié'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentaire $commentaire)
    {
        //
        $commentaire->delete();
        return response()->json([
            'message'=>'commentaire modifié'
        ]);
    }
}
