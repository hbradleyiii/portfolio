<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{
    /**
     * PageController constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', array('except' => array('show', 'index')));
    }

    /**
     * Display a listing of the articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::where('published_at', '<=', Carbon::now())
            ->where('published', '=', '1')
            ->orderBy('published_at', 'desc')
            ->paginate(config('app.posts_per_page'));

        return view('articles.index', compact('articles'));
    }

    /**
     * Display a listing of the articles for administration.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $articles = Article::all();
        return view('articles.admin', compact('articles'));
    }

    /**
     * Show the form for creating a new article.
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
        if ( ! Auth::check() && ! $page->published ) {
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
     * Update the specified article in storage.
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
