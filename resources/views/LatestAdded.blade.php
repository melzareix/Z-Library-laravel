    @extends('master')
    @section('title','Z-Library:: The World\' Greatest Nothing')
    @section('intro')
    <div class="jumbotron" style="margin: 10px;">
        <h1>Hello Readers.</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Accusantium alias asperiores assumenda consequatur dolorum,
            eaque expedita fuga ipsa magni officiis pariatur praesentium
            rem sint! Dignissimos doloribus inventore minus ullam voluptate.
        </p>
        <a class="btn btn-lg btn-primary" href="#" role="button">Our Mission</a>
    </div>
    @stop
    @section('content-title','Recently Added')
    @section('content')
  <div class="row">
    @foreach($books as $book)
    <div class="col-sm-4 col-md-4">
      <div class="thumbnail">
       <div class="caption">
        <h3>{{$book->name}}</h3>
        <p class="author">{{$book->author}}</p>
        <p class="home-desc">{{$book->description}}</p>
        <p><a href="{{url('/books',$book->id)}}" class="btn btn-default" role="button">Read more</a></p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
    @stop