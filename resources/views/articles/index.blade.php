@extends('admin')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Articles</h1>
            <ul class="list-group">
                @foreach ($articles as $article)
                    <li class="list-group-item">
                        <div>
                            <a href="{{ URL::route('article', $article->slug) }}">{{ $article->title }}</a>
                        </div>
                        <div class="btn-group">
                            <a href="{{ URL::route('article', $article->slug) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ URL::route('articles.edit', $article->slug) }}" class="btn btn-sm btn-primary">Edit</a>
                        </div>
                        {{ Form::open(['method' => 'DELETE', 'route' => ['articles.destroy', $article->slug]]) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) }}
                        {{ Form::close() }}
                    </li>
                @endforeach
            </ul>
        </div>
        <hr>
        <div class="col-md-6 col-md-offset-3">
            <h1>Create a new article</h1>
            {!! Form::open([ 'method' => 'POST', 'route' => ['articles.store'] ]) !!}
                @include('articles.form')
            {!! Form::close() !!}
        </div>
    </div>
@stop
