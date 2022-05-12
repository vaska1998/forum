@extends('welcome')
@section('content')
    <div class="mt-5 border p-5 bg-primary">
    <form method="post" action="{{route('comment.update',$comment->id)}}">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label fs-5 text-warning">Author</label>
            <input type="text" name="author" class="form-control" id="title" value="{{$comment->author}}" >

        </div>
        <div class="mb-3">
            <label for="content" class="form-label fs-5 text-warning">Comment</label>
            <textarea  class="form-control"  name="description" id="content" >{{$comment->description}}</textarea>

        </div>
        <div class="mb-3">
            <label for="content" class="form-label fs-5 text-warning">Theme</label>
            <select class="form-select" name="theme_id" aria-label="Default select example">
                @foreach($themes as $theme)
                    <option
                        {{$theme->id === $comment->theme->id ? 'selected' : ''}}
                        value="{{$theme->id}}">{{$theme->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn bg-warning">Submit</button>
    </form>
    </div>
@endsection
