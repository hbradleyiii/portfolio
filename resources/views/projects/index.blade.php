@extends('admin')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Projects</h1>
            <ul class="list-group">
                @foreach ($projects as $project)
                    <li class="list-group-item">
                        <div>
                            <a href="{{ URL::route('projects.edit', $project->slug) }}">{{ $project->name }}</a>
                        </div>
                        <div class="btn-group">
                            <a href="{{ URL::route('projects.show', $project->slug) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ URL::route('projects.edit', $project->slug) }}" class="btn btn-sm btn-primary">Edit</a>
                        </div>
                        {{ Form::open(['method' => 'DELETE', 'route' => ['projects.destroy', $project->slug]]) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) }}
                        {{ Form::close() }}
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
