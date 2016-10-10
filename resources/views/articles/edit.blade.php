@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Edit article</h1>
            {!! Form::model($article, [ 'method' => 'PATCH', 'route' => ['articles.update', $article->slug] ]) !!}
                @include('articles.form', [ 'submit_button_text' => 'Update Article', ])
            {!! Form::close() !!}
            <a href="{{ URL::route('articles.index') }}">Back</a>
        </div>
    </div>
@stop
