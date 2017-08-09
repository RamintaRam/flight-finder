@extends('layouts.app')
{{--@section('css')--}}
    {{--<style>--}}
    {{----}}
    {{--</style>--}}
{{--@endsection--}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

<div>
    <a href="create" class="btn btn-secondary btn-lg btn-block" style="border: 1px solid #d3e0e9; color: #777">Airports</a>
    <a href="create" class="btn btn-secondary btn-lg btn-block" style="border: 1px solid #d3e0e9; color: #777">Airlines</a>
    <a href="create" class="btn btn-secondary btn-lg btn-block" style="border: 1px solid #d3e0e9; color: #777">Flights</a>

</div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
