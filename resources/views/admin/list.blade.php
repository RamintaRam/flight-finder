@extends('admin.core')

@section('content')

    <div class="container">
        <div class="row">
            <h4>{{$title}}</h4>
            @if(isset($new))
                <div><a class="btn btn-success btn-sm" href="{{route($new)}}">{{trans('app.createNew')}}</a></div><br>
            @endif

            <div class="col-md-12">


                {{--@if(isset($new))--}}
                {{--<div><a class="btn btn-success btn-sm" href="{{route($new)}}">{{trans('app.new')}}</a></div><br>--}}
                {{--@endif--}}

                <div class="table-responsive">
                    @if(sizeof($list)>0)
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                @foreach($list[0] as $key => $value)

                                    <th>{{$key}}</th>

                                @endforeach
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $key => $record)

                                <tr id="{{$record['id']}}">
                                    @foreach($record as $key => $value)
                                        <td>{{$value}}</td>
                                    @endforeach
                                    <td>
                                        <a href="{{ route($edit,$record['id']) }}">
                                            <button type="button" class="btn btn-primary">Edit</button>
                                        </a>
                                    </td>
                                    <td>
                                        <button onclick="deleteItem( '{{ route($delete, $record['id']) }}' )"
                                                class="btn btn-danger">Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2>Data not find</h2>
                    @endif
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
                                    alert('ERROR')
                                }
                            });
                        }
                    </script>
@endsection