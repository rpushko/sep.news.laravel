@extends('layouts.default')

@section('content')
    <a href='{{route('news.list')}}' >Back</a>
<h2>{{$news->title}}</h2>
<div>{{$news->article}}</div>

@endsection