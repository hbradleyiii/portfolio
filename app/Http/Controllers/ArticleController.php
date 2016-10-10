<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use Carbon\Carbon;


class ArticleController extends Controller
{
    /**
     * Display a listing of published articles
     *
     * @return \Illuminate\Http\Response
     */
    public function published()
    {
        $articles = Article::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(config('app.posts_per_page'));
        return $articles;

        return view('article', compact('articles'));
    }

    /**
     * Display a listing of the articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created article in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->get('title');
        $article->slug = $request->get('slug');
        $article->body = $request->get('body');
        if ( $request->get('published_at') !== "" ) {
            $article->published_at = $request->get('published_at');
        }
        $article->published = null !== $request->get('published') ? true : false;

        $article->save();
        return back();
    }

    /**
     * Display the specified article.
     *
     * @param  Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        if ( ! $article->published ) {
            \App::abort(404, 'Article not found');
        }

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->title = $request->get('title');
        $article->slug = $request->get('slug');
        $article->body = $request->get('body');
        $article->published_at = $request->get('published_at');
        $article->published = null !== $request->get('published') ? true : false;

        $article->save();
        return back();
    }

    /**
     * Remove the specified article from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return back();
    }
}
