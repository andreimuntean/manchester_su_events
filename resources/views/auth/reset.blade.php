@extends('layouts.app')

@section('content')
    <section id="reset-password-section">
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h2>Reset Password</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(array('url' => url('password/reset'), 'method' => 'post', 'files'=> true)) !!}
                    {!! Form::hidden('token', $token) !!}
                    <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label('email', "E-Mail Address", array('class' => 'control-label')) !!}
                        <div class="controls">
                            {!! Form::text('email', null, array('class' => 'form-control')) !!}
                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                        {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
                        <div class="controls">
                            {!! Form::password('password', array('class' => 'form-control')) !!}
                            <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                        {!! Form::label('password_confirmation', "Confirm Password", array('class' => 'control-label')) !!}
                        <div class="controls">
                            {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                            <span class="help-block">{{ $errors->first('password_confirmation', ':message') }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Reset Password
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
