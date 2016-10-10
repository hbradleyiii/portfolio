@extends('layouts.main')

@section('title') {{ $page->title }} @stop

@section('meta_description') I write code. @stop

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $page->title }}</h1>
            <article>
                {{ $page->body }}
            </article>
        </div>
    </div>
@stop
