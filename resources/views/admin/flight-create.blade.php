@extends('admin.core')

@section('content')

    {!! Form::open(['url' => $route]) !!}
    @if(isset($record['id']))
        <div><h1>{{$record['id']}}</h1></div>
        <div class="form-group">
            {{Form::label('departure', 'Departure')}}
            {{Form::text('departure', $departure, $record['departure'])}}
            {{Form::label('arival', 'Arival')}}
            {{Form::text('arival', $arival, $record['arival'])}}
            {{Form::label('airline_id', 'Airline')}}
            {{Form::select('airline_id', $airline, $record['airline_id'])}}
            {{Form::label('destination_id', 'Destination')}}
            {{Form::select('destination_id', $destination, $record['destination_id'])}}
            {{Form::label('origin_id', 'Origin')}}
            {{Form::select('origin_id', $origin, $record['origin_id'])}}
        </div>
        <a class="btn btn-info" href="{{$back}}">Back to list</a>
        {{Form::submit(('Save'), ['class' => 'btn btn-success']) }}
    @else
        <div>{{$form}}</div>
        <div class="form-group">
            {{Form::label('departure', 'Departure')}}
            {{Form::text('departure', $departure)}}
            {{Form::label('arival', 'Arival')}}
            {{Form::text('arival', $arival)}}
            {{Form::label('airline_id', 'Airline')}}
            {{Form::select('airline_id', $airline)}}
            {{Form::label('destination_id', 'Destination')}}
            {{Form::select('destination_id', $destination)}}
            {{Form::label('origin_id', 'Origin')}}
            {{Form::select('origin_id', $origin)}}
        </div>
        <a class="btn btn-info" href="{{$back}}">Back to list</a>
        {{Form::submit(('Save'), ['class' => 'btn btn-success']) }}
    @endif

@endsection

@section('scripts')


    @endsection