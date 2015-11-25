@extends('master')
@section('title','Add New Book')
@section('content-title','Add New Book')
@section('content')
    {!! Form::open(['method' => 'POST','url'=>'books', 'class' => 'form-horizontal']) !!}
    @include('partials/form',['submitFormTitle'=>'Add Book'])
    {!! Form::close() !!}
@stop