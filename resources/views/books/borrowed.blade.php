    @extends('master')
    @section('title','Z-Library:: All Books')
    @section('content-title','My Books')
    @section('content')
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Author</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        @if ($books)
        @foreach($books as $book)
        <tr>
            <td><a href="/books/{{$book->id}}">{{$book->name}}</a></td>
            <td>{{$book->author}}</td>
            <td>{{$book->description}}</td>
        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
    @stop