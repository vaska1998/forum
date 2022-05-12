@extends('welcome')
@section('content')
    <div class="d-flex justify-content-center mt-5"><p class="fs-1 text-primary">{{$theme->name}}</p></div>
    <div class="d-flex justify-content-center mt-2"><a href="{{route('comment.create')}}" class="btn bg-primary fs-2 text-warning">Create new</a></div>
    <div class="row">
@foreach($comments as $comment)
    <div class="col-4 card mt-5 ms-4 bg-primary" style="width: 18rem;">
        <div class="card-body text-light">
            <h5 class="card-title">{{$comment->author}}:</h5>
            <p class="card-text">{{$comment->description}}</p>
            <a href="{{route('comment.show', $comment->id)}}" class="btn btn-warning">Show</a>
        </div>
    </div>
@endforeach
    </div>
@endsection
