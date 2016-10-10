<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    /**
     * Display a listing of the projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->name = $request->get('name');
        $project->slug = $request->get('slug');
        $project->timeframe = $request->get('timeframe');
        $project->description = $request->get('description');
        $project->published = null !== $request->get('published') ? true : false;
        $project->featured_development = null !== $request->get('featured_development') ? true : false;
        $project->featured_website = null !== $request->get('featured_website') ? true : false;

        $project->save();
        return back();
    }

    /**
     * Display the specified project.
     *
     * @param  Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        if ( ! $project->published ) {
            \App::abort(404, 'Project not found');
        }

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->name = $request->get('name');
        $project->slug = $request->get('slug');
        $project->timeframe = $request->get('timeframe');
        $project->description = $request->get('description');
        $project->published = null !== $request->get('published') ? true : false;
        $project->featured_development = null !== $request->get('featured_development') ? true : false;
        $project->featured_website = null !== $request->get('featured_website') ? true : false;

        $project->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return back();
    }
}