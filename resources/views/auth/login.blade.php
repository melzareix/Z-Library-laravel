@extends('master')
@section('title','Z-Library:: Login')
@section('content-title','Login')
@section('content')
{!! Form::open(['method' => 'POST' , 'url' =>'auth/login']) !!}
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

    {!! Form::submit('Login', ['class' => 'btn btn-primary text-center']) !!}
{!! Form::close() !!}
@stop