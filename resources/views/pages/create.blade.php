@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Create a new page</h1>
            {!! Form::open([ 'method' => 'POST', 'route' => ['pages.store'] ]) !!}
                @include('pages.form')
            {!! Form::close() !!}
            <a href="{{ URL::route('pages.index') }}">Back</a>
        </div>
    </div>
@stop
