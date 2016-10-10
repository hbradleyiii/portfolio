@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Pages</h1>
            <ul class="list-group">
                @foreach ($pages as $page)
                    <li class="list-group-item">
                        <div>
                            <a href="{{ URL::route('page', $page->slug) }}">{{ $page->title }}</a>
                        </div>
                        <div class="btn-group">
                            <a href="{{ URL::route('page', $page->slug) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ URL::route('pages.edit', $page->slug) }}" class="btn btn-sm btn-primary">Edit</a>
                        </div>
                        {{ Form::open(['method' => 'DELETE', 'route' => ['pages.destroy', $page->slug]]) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) }}
                        {{ Form::close() }}
                    </li>
                @endforeach
            </ul>
        </div>
        <hr>
        <div class="col-md-6 col-md-offset-3">
            <h1>Create a new page</h1>
            {!! Form::open([ 'method' => 'POST', 'route' => ['pages.store'] ]) !!}
                @include('pages.form')
            {!! Form::close() !!}
        </div>
    </div>
@stop
