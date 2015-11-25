    @extends('master')
    @section('title')
    {{$book->name}}
    @stop

    @section('content')
        <div class="text-left">
            <h1>{{$book->name}}</h1>
            <p class="author lead">{{$book->author}}</p>
            <p class="lead">{{$book->description}}</p>
            <a href="/books/{{$book->id}}/{{$ref}}" class="btn btn-primary">{{$borrowText}}</a>
        </div>
    @stop