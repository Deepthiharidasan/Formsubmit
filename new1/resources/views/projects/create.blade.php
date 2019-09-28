@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center; font-size: 25px; color: blue;">Registration form</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/projects/create">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autofocus placeholder="Enter Name" autocomplete="false">
 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Enter Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                         <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}"  placeholder="Enter Mobile">

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="col-md-6"><input id="gender" type="radio" name="gender" value="Male"  {{(old('gender') == 'Male') ? 'checked' : ''}} >Male</div>
                                <div class="col-md-6"><input id="gender" type="radio" name="gender" value="Female" {{(old('gender') == 'Female') ? 'checked' : ''}}>Female</div>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                        <div class="form-group{{ $errors->has('qualification') ? ' has-error' : '' }}">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <select class="form-control" name="qualification" id="qualification">
                                    <option value="">Qualification</option>
                                     @foreach($qualif as $value)
                                    <option value="{{$value}}" {{(old('qualification') == $value) ? 'selected' : ''}} >{{$value}}</option>
                                     @endforeach
                                </select> 

                                @if ($errors->has('qualification'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('qualification') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <textarea id="address" name="address" class="form-control" placeholder="Enter Address">{{old('address')}}</textarea>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-2"></div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary" style="width: 120px;">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
