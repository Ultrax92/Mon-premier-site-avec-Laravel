<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id); //
        return view('pages.article-details', ['article' => $article]);
    }

    // 1. Créer les articles
    public function create()
    {
        Article::truncate(); 

        Article::create([ //
            'title' => 'L’IA soigne mieux',
            'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.'
        ]);

        Article::create([
            'title' => 'Villes vertes',
            'description' => 'Les métropoles deviennent plus écologiques et durables.'
        ]);

        Article::create([
            'title' => 'Télétravail',
            'description' => 'Plus de liberté, mais aussi plus de solitude.'
        ]);

        return 'Articles créés avec succès !';
    }

    // 2. Modifier un article
    public function edit($id)
    {
        $article = Article::find($id); //
        
        if ($article) {
            $article->title = 'Titre modifié le ' . now(); //
            $article->save();
            return 'Article ' . $id . ' modifié !';
        }
        
        return 'Article introuvable.';
    }

    // 3. Supprimer un article
    public function delete($id)
    {
        $article = Article::find($id);
        
        if ($article) {
            $article->delete(); //
            return 'Article ' . $id . ' supprimé !';
        }

        return 'Article introuvable.';
    }
}