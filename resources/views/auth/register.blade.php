@extends('master')
@section('title','Z-Library:: Register')
@section('content-title','Register')
@section('content')
{!! Form::open(['method' => 'POST' , 'url' =>'auth/register']) !!}

<div class="form-group @if($errors->first('name')) has-error @endif">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>
    <div class="form-group @if($errors->first('email')) has-error @endif">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', old('email'), ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('email') }}</small>
    </div>

    <div class="form-group @if($errors->first('password')) has-error @endif">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('password') }}</small>
    </div>

    <div class="form-group @if($errors->first('password_confirmation')) has-error @endif">
        {!! Form::label('password_confirmation', 'Password Confirmation') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
    </div>

    <div class="form-group">
        <div class="checkbox @if($errors->first('admin')) has-error @endif">
            <label for="admin">
                {!! Form::checkbox('admin', null, 1, ['id' => 'admin']) !!} Become Admin
            </label>
        </div>
        <small class="text-danger">{{ $errors->first('admin') }}</small>
    </div>

    {!! Form::submit('Register', ['class' => 'btn btn-primary text-center']) !!}
{!! Form::close() !!}
@stop