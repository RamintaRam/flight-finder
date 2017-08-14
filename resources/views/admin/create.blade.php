@extends('admin.core')


@section('content')

    {!! Form::open(['url' => $route]) !!}
    @if(isset($record['id']))
        <div><h1>{{$record['name']}}</h1></div>
        <div class="form-group">
            {{Form::label('name')}}
            {{Form::text('name', $record['name'])}}

        </div>
        <a class="btn btn-info" href="{{$back}}">Back to list</a>
        {{Form::submit(('Save'), ['class' => 'btn btn-success']) }}
    @else
        <div>{{$form}}</div>
        <div class="form-group">
            {{Form::label('name')}}
            {{Form::text('name')}}
        </div>
        <a class="btn btn-info" href="{{$back}}">Back to list</a>
        {{Form::submit(('Save'), ['class' => 'btn btn-success']) }}
    @endif

@endsection


