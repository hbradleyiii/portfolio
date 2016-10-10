@extends('layout')

@section('title') {{ $project->title }} @stop

@section('meta_description') I write code. @stop

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $project->name }}</h1>
            <article>
                {{ $project->description }}
            </article>
        </div>
    </div>
@stop
