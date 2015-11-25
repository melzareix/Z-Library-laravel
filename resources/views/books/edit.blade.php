    @extends('master')
    @section('title')
    {{$book->name}}
    @stop
    @section('content-title')
    Edit: {{$book->name}}
    @stop
    @section('content')
        {!! Form::model($book,['method' => 'PATCH','url'=>"books/$book->id", 'class' => 'form-horizontal']) !!}
          @include('partials/form',['submitFormTitle'=>'Edit Book'])
        {!! Form::close() !!}
    @stop