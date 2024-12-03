<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
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
        // vérification des permissions plus tard
        $user = Auth::user();
        $request['user_id'] = $user->id;

        // dd($request->all());
        //validation des donnée envoyer par le formulaire
        $validatedData = $request->validate([
            '_token' => 'required|string',
            'title' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'content' => 'required|string',
            'file_path' => 'nullable|mimes:pdf',
            'user_id' => 'required|numeric|exists:users,id',
         ]);
   
        //une nouvelle enregistrement dans la base de données
        // dd($validatedData);
        Article::create([
            'title' => $request->title,
            'image' => $request->file('image')->store('img', 'public'),
            'content' => $request->content,
            'file_path' => $request->file_path,
            'user_id' => $request->user_id,
        ]);
        return redirect('/home')->with('success', 'Article ajouté avec succès');
    }


    public function index()
    {
        $articles = Article::with('user')->get();
        return view('articles.index', compact('articles'));
    }


    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }


    public function download($id)
    {
        $article = Article::find($id);
        return Storage::download($article->file_path);
    }
}

