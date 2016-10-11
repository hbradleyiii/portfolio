@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Articles</h1>
            <ul class="list-group">
                @foreach ($articles as $article)
                    <li class="list-group-item">
                        <a href="{{ URL::route('articles.show', $article->slug) }}">{{ $article->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@stop
