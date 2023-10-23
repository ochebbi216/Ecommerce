<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=categorie::all();
        return $categories;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie = new Categorie([
            'nomcategorie' => $request->input('nomcategorie'),
            'imagecategorie' => $request->input('imagecategorie')
            ]);
            $categorie->save();
            
            return response()->json($categorie, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categorie = Categorie::find($id);
        return response()->json($categorie);
    }
    public function update(Request $request, $id)
    {
        $categorie = Categorie::find($id);
        $categorie->update($request->all());
        return response()->json('Catégorie MAJ !');
    }
    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
        return response()->json('Catégorie supprimée !');
    }
    }
