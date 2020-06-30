@extends('layouts.default')

@section('content')

    <ul>
        @foreach ($news as $newsone)
            <li><a href='{{route('news.show',$newsone->id)}}'>{{ $newsone->title}}</a></li>
    </ul>

    @endforeach
    <a href="{{route('news.create')}}">
        <i class="fa fa-plus"></i> Добавить задачу
    </a>

@endsection