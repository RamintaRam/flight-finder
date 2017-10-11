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
    @if(($flights)>0)
        <table id="mytable" class="table table-bordred table-striped">
            <thead>
            <tr>

                @foreach($flights[0] as $key => $value)
                    @if(substr($key, -3) == '_id')
                        <th>{{ucfirst(substr($key, 0, -3))}}</th>
                    @else
                        <th> {{ucfirst($key)}}</th>
                    @endif
                @endforeach
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($flights as $flight)
                    @foreach($flight as $key => $value)
                        @if($key == 'airline')
                            @foreach($value as $key => $title)
                                @if($key == 'name')

                                    {{--@foreach($record as $key => $value)--}}
                                    <td>{{$title}}</td>
                                @endif
                            @endforeach

                            {{--@endforeach--}}

                        @else
                            <td>{{$value}}</td>
                        @endif
                    @endforeach
            </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="no-data"></div><p>Sorry, no matching flights found </p></div>
@endif


</div>