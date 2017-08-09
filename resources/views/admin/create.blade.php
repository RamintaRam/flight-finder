@extends('layouts.app')


@section('content')


    {{--{!! Form::open(['url' => $route]) !!}--}}
    {{--@if(isset($record['id']))--}}
        {{--<div><h1>{{$record['name']}}</h1></div>--}}
        {{--<div class="form-group">--}}
            {{--{{Form::label('name')}}--}}
            {{--{{Form::text('name', $record['name'])}}--}}
        {{--</div>--}}
        {{--<a class="btn btn-info" href="{{$back}}">Back to list</a>--}}
        {{--{{Form::submit(('Save'), ['class' => 'btn btn-success']) }}--}}
    {{--@else--}}
        {{--<div>{{$form}}</div>--}}
        {{--<div class="form-group">--}}
            {{--{{Form::label('name')}}--}}
            {{--{{Form::text('name')}}--}}
        {{--</div>--}}
        {{--<a class="btn btn-info" href="{{$back}}">Back to list</a>--}}
        {{--{{Form::submit(('Save'), ['class' => 'btn btn-success']) }}--}}
    {{--@endif--}}


    <div class="container">


        <form class="form-horizontal" method="post" id="nameform">
            {{Form::token()}}

            <div id="div_id_name" class="form-group required">
                    @if(isset($record['id']))
                    <h2>{{$record['name']}}</h2>
                @foreach($record as $key => $value)
                        <label for="id_name" class="control-label col-md-4  requiredField"> {{$key}}<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md  textinput textInput form-control" maxlength="30"
                                   style="margin-bottom: 10px"
                                   type="text"/>
                        </div>
                @endforeach
                    <a class="btn btn-info" href="{{$back}}">Back to list</a>
                    {{Form::submit(('Save'), ['class' => 'btn btn-success']) }}

                        @else
                    <div>{{$form}}</div>

                    <label for="id_name" class="control-label col-md-4  requiredField"> Name<span
                                class="asteriskField">*</span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md  textinput textInput form-control" id="id_name" maxlength="30"
                               name="name" placeholder="" style="margin-bottom: 10px"
                               type="text"/>
                    </div>

                    <a class="btn btn-info" href="{{$back}}">Back to list</a>
                    {{Form::submit(('Save'), ['class' => 'btn btn-success']) }}
                @endif
            </div>



        </form>

@endsection


