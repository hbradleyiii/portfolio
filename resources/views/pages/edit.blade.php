@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Edit page</h1>
            {!! Form::model($page, [ 'method' => 'PATCH', 'route' => ['pages.update', $page->slug] ]) !!}
                @include('pages.form', [ 'submit_button_text' => 'Update Page', ])
            {!! Form::close() !!}
            <a href="{{ URL::route('pages.index') }}">Back</a>
        </div>
    </div>
@stop
