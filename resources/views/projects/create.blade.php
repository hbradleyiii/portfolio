@extends('admin')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Create a new Project</h1>
            {!! Form::open([ 'method' => 'POST', 'route' => ['projects.store'] ]) !!}
                @include('projects.form')
            {!! Form::close() !!}
            <a href="{{ URL::route('projects.index') }}">Back</a>
        </div>
    </div>
@stop
