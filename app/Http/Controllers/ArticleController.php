<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        return view('article.create');
    }

    /**
     * Summary of store
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function store(Request $request){        
        $imageId = uniqid();

        $article = new Article;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->image = 'image-article-' . $imageId . '.' . $request->file('foto')->extension();
        $article->image_id = $imageId;

        $article->save();

        $fileName = 'image-article-' . $imageId . '.' . $request->file('foto')->extension();

        $image = $request->file('foto')->storeAs('public', $fileName);

        return redirect()->route('homepage');
    }
}

