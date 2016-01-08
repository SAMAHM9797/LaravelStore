@extends('layouts.layout')

@section('content')
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">           
            <div class="col-sm-12">                         
                <h2 class="title text-center">Contact <strong>Us</strong></h2>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/contact-us') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Message</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control"   name="your_message" value="{{old('your_message') }}">
                                @if ($errors->has('your_message'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('your_message') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
