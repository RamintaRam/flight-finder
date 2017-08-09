@extends('layouts.app')


@section('content')
    <div class="container">

        {{--<div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">--}}
        {{--<div class="panel panel-info">--}}
        {{--<div class="panel-heading">--}}
        {{--<div class="panel-title">Sign Up</div>--}}
        {{--<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="/accounts/login/">Sign In</a></div>--}}
        {{--</div>--}}
        {{--<div class="panel-body" >--}}
        {{--<form method="post" action=".">--}}
        {{--<input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />--}}


        <form class="form-horizontal" method="post" id="nameform">
            {{Form::token()}}
            {{--<input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />--}}
            {{--<div id="div_id_select" class="form-group required">--}}
            {{--<label for="id_select"  class="control-label col-md-4  requiredField"> Select<span class="asteriskField">*</span> </label>--}}
            {{--<div class="controls col-md-8 "  style="margin-bottom: 10px">--}}
            {{--<label class="radio-inline"><input type="radio" checked="checked" name="select" id="id_select_1" value="S"  style="margin-bottom: 10px">Knowledge Seeker</label>--}}
            {{--<label class="radio-inline"> <input type="radio" name="select" id="id_select_2" value="P"  style="margin-bottom: 10px">Knowledge Provider </label>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div id="div_id_As" class="form-group required">--}}
            {{--<label for="id_As"  class="control-label col-md-4  requiredField">As<span class="asteriskField">*</span> </label>--}}
            {{--<div class="controls col-md-8 "  style="margin-bottom: 10px">--}}
            {{--<label class="radio-inline"> <input type="radio" name="As" id="id_As_1" value="I"  style="margin-bottom: 10px">Individual </label>--}}
            {{--<label class="radio-inline"> <input type="radio" name="As" id="id_As_2" value="CI"  style="margin-bottom: 10px">Company/Institute </label>--}}
            {{--</div>--}}
            {{--</div>--}}
            <div id="div_id_name" class="form-group required">
                @foreach($fields as $field)
                    @if(isset($field['key']))
                        <label for="id_name" class="control-label col-md-4  requiredField"> {{$field['key']}}<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md  textinput textInput form-control" id="id_name" maxlength="30"
                                   name="name" placeholder="Choose your name" style="margin-bottom: 10px"
                                   type="text"/>
                        </div>
                    @endif
                @endforeach
            </div>


            {{--<div id="div_id_gender" class="form-group required">--}}
            {{--<label for="id_gender"  class="control-label col-md-4  requiredField"> Gender<span class="asteriskField">*</span> </label>--}}
            {{--<div class="controls col-md-8 "  style="margin-bottom: 10px">--}}
            {{--<label class="radio-inline"> <input type="radio" name="gender" id="id_gender_1" value="M"  style="margin-bottom: 10px">Male</label>--}}
            {{--<label class="radio-inline"> <input type="radio" name="gender" id="id_gender_2" value="F"  style="margin-bottom: 10px">Female </label>--}}
            {{--</div>--}}
            {{--</div>--}}


            {{--<div class="form-group">--}}
            {{--<div class="controls col-md-offset-4 col-md-8 ">--}}
            {{--<div id="div_id_terms" class="checkbox required">--}}
            {{--<label for="id_terms" class=" requiredField">--}}
            {{--<input class="input-ms checkboxinput" id="id_terms" name="terms" style="margin-bottom: 10px" type="checkbox" />--}}
            {{--Agree with the terms and conditions--}}
            {{--</label>--}}
            {{--</div>--}}

            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
            {{--<div class="aab controls col-md-4 "></div>--}}
            {{--<div class="controls col-md-8 ">--}}
            {{--<input type="submit" name="Signup" value="Signup" class="btn btn-primary btn btn-info" id="submit-id-signup" />--}}
            {{--or <input type="button" name="Signup" value="Sign Up with Facebook" class="btn btn btn-primary" id="button-id-signup" />--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div> {!! Form::submit(trans('app.create') , ['class' => 'btn btn-success']) !!}--}}

            <a class="btn btn-primary" href="{{$back}}">Back</a>
            <button type="submit" form="nameform" value="Submit">Submit</button>
            {{--</div>--}}

        </form>

        {{--</form>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}


    </div>
@endsection


@section('scripts')

    <script>

//        $.ajaxSetup({
//            headers: {
//                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
//            }
//        });

//        function toggleActive(URL, value) {
//            $.ajax({
//                url: URL,
//                type: 'POST',
//                data: {is_active: value},
//                success: function (response) {
//
//                    var dangerButton = $('#' + response.id).find('.btn-danger');
//                    var successButton = $('#' + response.id).find('.btn-success');
//
//                    // console.log(dangerButton, successButton)
//
//                    /*                   console.log($('#' + response.id).
//                     find('btn btn-danger btn-sm').
//                     find('btn btn-primary btn-sm'))*/
//
//
////                   console.log( $('#' + response.id).hide())
//
//
//                    console.log(response.is_active);
//
//                    if (response.is_active === '1') {
//                        successButton.hide();
//                        dangerButton.show()
//                    } else {
//                        successButton.show();
//                        dangerButton.hide()
//                    }
//
//
//                }
//            });
//        }
//
//
//
//
//        function deleteItem(route) {
//            $.ajax({
//                url: route,
//                type: 'DELETE',
//                data: {},
//                dataType: 'json',
//                success: function (r) {
//                    $("#" + r.id).remove();
//                },
//                error: function () {
//                    alert('error');
//                }
//            });
//        }
//
//
//
//
//


    </script>

@endsection