@extends('welcome')
@section('content')

    <div class="d-flex justify-content-center mt-5"><p class="fs-1 fw-bold text-primary">Themes:</p></div>
    <div class="d-flex justify-content-center">

    <ul class="list-group">
        @foreach($themes as $theme)
            <li class="list-group-item fs-1 mt-5 bg-primary text-light"><a href="{{route('theme.show', $theme->id)}}">{{$theme -> id}}. {{$theme->name}}</a></li>
        @endforeach
    </ul>

    </div>
@endsection
