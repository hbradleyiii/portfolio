<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PageController extends Controller
{
    /**
     * PageController constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', array('except' => array('show')));
    }


    /**
     * Redirect to listing for administration
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('pages.admin');
    }

    /**
     * Display a listing of the pages for administration.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $pages = Page::all();
        return view('pages.admin', compact('pages'));
    }

    /**
     * Show the form for creating a new page.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created page in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page();
        $page->title = $request->get('title');
        $page->slug = $request->get('slug');
        $page->body = $request->get('body');
        $page->published = null !== $request->get('published') ? true : false;

        $page->save();
        return back();
    }

    /**
     * Display the specified page.
     *
     * @param  Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        if ( ! Auth::check() && ! $page->published ) {
            \App::abort(404, 'Page not found');
        }

        return view('pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified page.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }

    /**
     * Update the specified page in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $page->title = $request->get('title');
        $page->slug = $request->get('slug');
        $page->body = $request->get('body');
        $page->published = null !== $request->get('published') ? true : false;

        $page->save();
        return back();
    }

    /**
     * Remove the specified page from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return back();
    }
}
