@extends('admin')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Create a new article</h1>
            {!! Form::open([ 'method' => 'POST', 'route' => ['articles.store'] ]) !!}
                @include('articles.form')
            {!! Form::close() !!}
            <a href="{{ URL::route('articles.index') }}">Back</a>
        </div>
    </div>
@stop
