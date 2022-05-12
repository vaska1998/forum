@extends('welcome')
@section('content')
    <div class="d-flex justify-content-center mt-5"><p class="fs-1 text-primary">All comments</p></div>
    <div class="row">
@foreach($comments as $comment)
    <div class="col-4 card mt-5 ms-4 bg-primary" style="width: 18rem;">
        <div class="card-body text-light">
            @switch($comment->theme_id)
                @case(1)
                <h4>Weather</h4>
                @break
                @case(2)
                <h4>Politics</h4>
                @break
                @case(3)
                <h4>Roads</h4>
                @break
                @default
                <span>Something went wrong, please try again</span>
            @endswitch
            <h5 class="card-title">{{$comment->author}}:</h5>
            <p class="card-text">{{$comment->description}}</p>
            <a href="{{route('comment.show', $comment->id)}}" class="btn btn-warning">Show</a>
        </div>
    </div>
@endforeach
    </div>
@endsection
