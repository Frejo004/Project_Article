<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function create()
    {
        return view('articles.article');
    }

    public function store(Request $request)
    {
        //validation des donnée envoyer par le formulaire
        $request->validate([
            'title' => 'required|string|max:15',
            'image' => 'nullable|image',
            'content' => 'nullable|string',
            'file_path' => 'nullable|mimes:pdf|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('articles', 'public');
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles/images', 'public');
        }


        //une nouvelle enregistrement dans la base de données
        Article::create([
            'title' => $request->title,
            'image' => $imagePath,
            'content' => $request->content,
            'file_path' => $filePath,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('articles.index')->with('success', 'Article ajouté avec succès');
    }

    public function index()
    {
        $articles = Article::with('user')->get();
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function download(Article $article)
    {
        return Storage::download($article->file_path);
    }
}

