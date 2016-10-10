<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Page;
use Illuminate\Http\Request;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
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
        if ( ! $page->published ) {
            \App::abort(404, 'Page not found');
        }

        return view('pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
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
