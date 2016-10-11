@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Projects</h1>
            <ul class="list-group">
                @foreach ($projects as $project)
                    <li class="list-group-item">
                        <a href="{{ URL::route('projects.show', $project->slug) }}">{{ $project->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@stop
