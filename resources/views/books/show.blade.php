    @extends('master')
    @section('title')
    {{$book->name}}
    @stop

    @section('content')
        <div class="text-left">
            <h1>{{$book->name}}</h1>
            <p class="author lead">{{$book->author}}</p>
            <p class="lead">{{$book->description}}</p>
            @if(Auth::user()->admin)
            <a href="/books/{{$book->id}}/edit" class="btn btn-primary">Edit</a>
            @else
            <a href="/books/{{$book->id}}/{{$ref}}" class="btn btn-primary">{{$borrowText}}</a>
            @endif
        </div>
    @stop