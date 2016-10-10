@extends('admin')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Edit Project</h1>
            {!! Form::model($project, [ 'method' => 'PATCH', 'route' => ['projects.update', $project->slug] ]) !!}
                @include('projects.form', [ 'submit_button_text' => 'Update Project', ])
            {!! Form::close() !!}
            <a href="{{ URL::route('projects.index') }}">Back</a>
        </div>
    </div>
@stop
