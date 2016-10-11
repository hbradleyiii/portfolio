@extends('layouts.admin')

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
        <hr>
        <div class="col-md-6 col-md-offset-3">
            <h1>Create a new project</h1>
            {!! Form::open([ 'method' => 'POST', 'route' => ['projects.store'] ]) !!}
                @include('projects.form')
            {!! Form::close() !!}
        </div>
    </div>
@stop
