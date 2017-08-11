@extends('frontend.core-frontend')
<div class="title"> Flight search</div>

<div class="form-group">
    <div class="form">
        {!! Form::open(['url' => $route, 'method' => 'get']) !!}
        {{Form::label('origin_id', 'From')}}
        {{Form::select('origin_id', $origin)}}
        {{Form::label('destination_id', 'To')}}
        {{Form::select('destination_id', $destination)}}
      <p>  {{Form::label('departure', 'Date')}}
        {{Form::date('departure', $date)}}

        {{--</div>--}}
        {{--<div class="input-group date" data-provide="datepicker">--}}
        {{--<input type="text" class="form-control">--}}
        {{--<div class="input-group-addon">--}}
        {{--<span class="glyphicon glyphicon-th">{{$date}}</span>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>

    <div class="search">    {{Form::submit(('search'), ['class' => 'btn btn-success']) }} </div>
    {!!Form::close()!!}
</div>


{{--@section('scripts')--}}
{{--<script type="text/javascript">--}}
{{--$(document).ready(function() {--}}
{{--$(".js-example-basic-single").select2();--}}
{{--});--}}
{{--</script>--}}

{{--<select class="js-example-basic-single">--}}
{{--<option value="AL">Alabama</option>--}}
{{--...--}}
{{--<option value="WY">Wyoming</option>--}}
{{--</select>--}}

{{--@endsection--}}