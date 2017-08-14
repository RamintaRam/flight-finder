@extends('admin.core')

@section('content')

    {!! Form::open(['url' => $route]) !!}
    @if(isset($record['id']))
        <div><h1>{{$record['name']}}</h1></div>
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $record['name'])}}
            {{Form::label('city', 'City')}}
            {{Form::text('city', $record['city'])}}
            {{Form::label('country_id', 'Country')}}
            {{Form::select('country_id', $country, $record['country_id'])}}
        </div>
        <a class="btn btn-info" href="{{$back}}">Back to list</a>
        {{Form::submit(('Save'), ['class' => 'btn btn-success']) }}
    @else
        <div>{{$form}}</div>
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name')}}
            {{Form::label('city', 'City')}}
            {{Form::text('city')}}
            {{Form::label('country_id', 'Country')}}
            {{Form::select('country_id', $country)}}
        </div>
        <a class="btn btn-info" href="{{$back}}">Back to list</a>
        {{Form::submit(('Save'), ['class' => 'btn btn-success']) }}
    @endif

@endsection