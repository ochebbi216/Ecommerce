<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */public function index()
{
    $articles = Article::with('scategories')->get()->toArray();
    return array_reverse($articles);
    }
    public function store(Request $request)
    {
    $article = new Article([
    'designation' => $request->input('designation'),
    'marque' => $request->input('marque'),
    'reference' => $request->input('reference'),
    'qtestock' => $request->input('qtestock'),
    'prix' => $request->input('prix'),
    'imageart' => $request->input('imageart'),
    'scategorieID' => $request->input('scategorieID')
    ]);
    $article->save();
    return response()->json('Article créé !');
    }
    public function show($id)
    {
    $article= Article::find($id);
    return response()->json($article);
    }
    public function update($id, Request $request)
    {
    $article = Article::find($id);
    $article->update($request->all());
    return response()->json('Article MAJ !');
    }
    public function destroy($id)
    {
    $article = Article::find($id);
    $article->delete();
    return response()->json('Article supprimé !');
    }
    }