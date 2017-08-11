@extends('frontend.core-frontend')
<div class="title"> Flight search</div>

<div class="form-group">
    <div class="form">
        {!! Form::open(['url' => $route, 'method' => 'get']) !!}
        {{Form::label('origin_id', 'From')}}
        {{Form::select('origin_id', $origin)}}
        {{Form::label('destination_id', 'To')}}
        {{Form::select('destination_id', $destination)}}
        <p> {{Form::label('departure', 'Date')}}
        {{Form::date('departure', $date)}}


    </div>

    <div class="search">    {{Form::submit(('search'), ['class' => 'btn btn-success']) }} </div>
    {!!Form::close()!!}
</div>


<div class="list">
    @if(sizeof ($flights)>0)
        <table id="mytable" class="table table-bordred table-striped">
            <thead>
            <tr>

                @foreach($flights[0] as $key => $value)
                    <th>{{$key}}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>

            @foreach($flights as $key => $record)
                <tr>
                    @foreach($record as $key => $value)
                        <td>{{$value}}</td>
                    @endforeach
                </tr>
            @endforeach

            </tbody>
        </table>
@else
        <p>NO</p>
    @endif


</div>

