
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h4>XXXXXXXX</h4>
            @if(isset($new))
                <div><a class="btn btn-success btn-sm" href="{{route($new)}}">{{trans('app.createNew')}}</a></div><br>
            @endif

            <div class="col-md-12">


                {{--@if(isset($new))--}}
                    {{--<div><a class="btn btn-success btn-sm" href="{{route($new)}}">{{trans('app.new')}}</a></div><br>--}}
                {{--@endif--}}

                <div class="table-responsive">
                    @if(sizeof($list)>0)
                        <table id="mytable" class="table table-bordred table-striped">

                            <thead>

                            <th></th>
                            @foreach($list[0] as $key => $value)
                                <th>{{$key}}</th>
                            @endforeach
                            <th>Edit</th>
                            <th>Delete</th>

                            </thead>
                            <tbody>
                            @foreach($list as $key => $record)
                                <tr id="{{$record['id']}}">
                                    <td><input type="checkbox" class="checkthis"/></td>
                                    @foreach($record as $key => $value)

                                        <td>{{$value}}</td>

                                    @endforeach

                                    <td>


                                        <p data-placement="top" data-toggle="tooltip" title="Edit">
                                            <a href="{{ route($edit,$record['id']) }}">
                                            <button class="btn btn-primary btn-xs" data-title="Edit"
                                                    data-toggle="modal" data-target="#edit"><span
                                                        class="glyphicon glyphicon-pencil"></span></button>
                                            </a>
                                        </p>
                                    </td>
                                    <td>

                                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                                            <button onclick="deleteItem( '{{ route($delete, $record['id']) }}' )" class="btn btn-danger btn-xs" data-title="Delete"
                                                    data-toggle="modal" data-target="#delete"><span
                                                        class="glyphicon glyphicon-trash"></span></button>
                                        </p>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                        @else
                        <p><h4 style="font-style: italic">{{trans('app.noData')}} </h4></p>
                    @endif

                </div>

            </div>
        </div>
    </div>


@endsection

@section('scripts')

    <script>


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function deleteItem(route) {
            $.ajax({
                url: route,
                type: 'DELETE',
                dataType: 'json',
                success: function (response) {
                    $('#' + response.id).remove();
                },
                error: function () {
                    alert('error')
                }
            });
        }


    </script>


@endsection


