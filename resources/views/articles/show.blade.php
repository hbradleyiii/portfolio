@extends('layout')

@section('title') {{ $article->title }} @stop

@section('meta_description') I write code. @stop

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $article->title }}</h1>
            <article>
                {{ $article->body }}
            </article>
        </div>
    </div>
@stop
