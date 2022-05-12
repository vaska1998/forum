@extends('welcome')
@section('content')
    <div class="d-flex justify-content-around mt-5">
        <div class="col-1 mt-5 ms-4 bg-primary btn-lg btn btn-primary " style="height: 3rem;"><a class=" fw-bold" href="{{route('theme.show', $comment->theme_id)}}"><- Back</a></div>
    <div class="col-4 card mt-5 ms-4 bg-primary" style="width: 18rem;">
        <div class="card-body text-light">
            <h1 class="card-title">{{$comment->author}}:</h1>
            <h2 class="card-text">{{$comment->description}}</h2>
        </div>
        <div class="d-flex justify-content-between mb-3 ">
            <a class="btn btn-success ms-3 fw-bold fs-5" href="{{route('comment.edit', $comment->id)}}">Edit</a>

            <form method="POST" action="{{route('comment.delete', $comment)}}" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger me-3 fw-bold fs-5">Delete</button>
            </form>
        </div>
    </div>
        <div class="col-1 mt-5 ms-4 bg-primary btn-lg btn btn-primary " style="height: 3rem;"><a class=" fw-bold" href="{{route('comment.show', $comment->id+1)}}">Next -></a></div>
    </div>
@endsection
